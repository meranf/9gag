<?php
define('CONNECTED'    , 0xF0);
define('DISCONNECTED' , 0x0000);
define('IS_STRING'    , 0x02);
define('IS_ARRAY'     , 0x04);
define('IS_COMPRESSED', 0x08);

class gMemCache {
    var $host;
    var $port;
    
    /* privates vars!, do not modify from outside the class */
    var $status;
    var $socket;
    function gMemCache($host="", $port=0) {
        $this->host = $host;
        $this->port = $port;
        $this->connect();
    }
    /*
     *  Connect to a memcache server.
     *  On fail return false.
     */
    function connect() {
        if ( $this->isConnected() ) return false;
        $this->status = DISCONNECTED;
        if ( $this->host == "" || $this->port == 0) return false;
        $this->socket = fsockopen($this->host,$this->port);
        if ($this->socket !== false)
            $this->status = CONNECTED;
        return ($this->socket !== false);
    }    
    
    function isConnected() {
        return $this->status == CONNECTED;
    }
    
    /*
     *  Read the content from of $name from memcache
     *  On fail return false.
     */
    function get($name) {    
        if (! $this->isConnected() ) return false;
        $buf = "";
        fwrite($this->socket, "get \"$name\"\r\n");
        while ($c = fread($this->socket,2048))  {
            $buf .= $c;
            if ( substr($c,-5,3) == "END") break;
        }
        /* Getting first line */
        $lines = explode("\r\n",$buf,2);
        $parts = explode(" ",$lines[0]);
        
        $value = substr($lines[1], 0, $parts[3]);
        
        if ($parts[2] & IS_COMPRESSED) 
            $value = gzuncompress($value);
            
        if ($parts[2] & IS_ARRAY)
            $value = unserialize($value);
        
        return $value;
    }
    
    /*
     *  Set the var $name with the content $value
     *  into the $lifetime seconds (forever=0; max = 2592000 [30 days]) 
     *  Also can compress variables, for reduce network overhead.
     *
     *  On fail return false.
     */
    function set($name, $value, $lifetime = 0, $compress = false) {
        
        if (! $this->isConnected() ) return false;
        $magic = $this->getVarType($value);
        if ( $magic == IS_ARRAY) 
            $value = serialize($value);
        
        if ($compress) {
            $magic |= IS_COMPRESSED;
            $value = gzcompress($value);
        }
        $len = strlen($value);
        
        fwrite($this->socket, "set \"${name}\" $magic 0 $len\r\n$value\r\n");
        $buf = "";
        while ($c = fread($this->socket,2048))  {
            $buf .= $c;
            if ( substr($c,-2,2) == "\r\n") break;
        }
        if ( $buf != "STORED") return false;
    }
    	
    /*
     *  Disconnect from a memcache server.
     *  On fail return false.
     */
    function disconnect() {
        if (! $this->isConnected() ) return false;
        fclose($this->socket);
    }
    
    /*
     *  This method return the type of the var.
     *  The possible results are IS_ARRAY (need serialize)
     *  or IS_STRING (do not need)
     */
    function getVarType(&$var) {
        switch ( gettype($var) ) {
            case "array":
            case "object":
                $r = IS_ARRAY;
                break;
            case "default":
                $r = IS_STRING;
        }
        return $r;
    }
}

// Author: Arsalan Akhtar (CTO, Facebookster)
// Email: arsalanakhtar@salsoft.net
?>