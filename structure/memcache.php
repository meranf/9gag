<?php
/* This is a memcache lib file having functions which we use to get and set data in memcache */

//Connect Memcache using the connection string
function ConnectMemcache()
{
	global $mem_ip,$mem_port;
	return new gMemCache($mem_ip, $mem_port);
}

//Set Data in MemCache
function SetData($key,$data)
{
	global $mem_global_key;
	if(MEMCACHE_ON_OFF)
	{
		$key = $mem_global_key.$key;
		$memcache = ConnectMemcache();
		$memcache->set($key, $data,0,true);
		$memcache->disconnect();
		//echo "Data Set In Cache<br>";
		return true;
	}
	else
	{
		return false;
	}
}

# Set Data in MemCache
function SetDataTime($key,$data, $time)
{
	global $mem_global_key;
	if(MEMCACHE_ON_OFF)
	{
		$key = $mem_global_key.$key;
		$memcache = ConnectMemcache();
		$memcache->set($key, $data,$time,true);
		$memcache->disconnect();
		return true;
	}
	else
	{
		return false;
	}
}


# Get Data from MemCache
function GetData($key)
{
	global $mem_global_key;
	if(MEMCACHE_ON_OFF)
	{
		$key = $mem_global_key.$key;
		$memcache = ConnectMemcache();
		$data = $memcache->get($key);
		$memcache->disconnect();
		//echo "Data Retrive From Cache<br>";	
		return $data;
	}
	else
	{
		return false;
	}
}

# SET DATA IN MEMCACHE THROUGH PROCEDURAL API
function SetDataWithTime($key, $data, $is_compressed, $time)
{
	global $mem_ip, $mem_port, $mem_global_key;
	
	if(MEMCACHE_ON_OFF)
	{
		/* procedural API */
		$memcache_obj = memcache_connect($mem_ip, $mem_port);
		//var_dump($memcache_obj);
		
		$key = $mem_global_key.$key;
		if($is_compressed == 2){$compress = 2;} else{$compress = 0;}
		
		$T = memcache_set($memcache_obj, $key, $data, $compress, $time);
		return $T;
	}
	else
	{
		return false;
	}
}

# GET DATA FROM MEMCACHE THROUGH PROCEDURAL API
function GetDataP($key)
{
	global $mem_ip, $mem_port, $mem_global_key;
	
	if(MEMCACHE_ON_OFF)
	{
		/* procedural API */
		$memcache_obj = memcache_connect($mem_ip, $mem_port);
		//var_dump($memcache_obj);
		
		$key = $mem_global_key.$key;
		$data = memcache_get($memcache_obj, $key);
		return $data;
	}
	else
	{
		return false;
	}
}
/* This is a memcache lib file having functions which we use to get and set data in memcache */
// Author: Arsalan Akhtar (CTO, Facebookster)
// Email: arsalanakhtar@salsoft.net
?>