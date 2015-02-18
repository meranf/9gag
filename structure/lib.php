<?php
function isSecure()
{
	if( isset($_SERVER['HTTPS'] )  && $_SERVER['HTTPS'] != 'off' ) 
	{
		return true;
	}
	else
	{
		return false;
	}
}

function time_elapsed_string($ptime)
{
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 12 * 30 * 24 * 60 * 60  =>  'y',
                30 * 24 * 60 * 60       =>  'mo',
                24 * 60 * 60            =>  'd',
                60 * 60                 =>  'h',
                60                      =>  'm',
                1                       =>  's'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r  . $str . ($r > 1 ? '' : '');
        }
    }
}
function REMOVE_SPECIAL($str)
{
    $temp = str_replace("'","&#39;",$str);
    $temp = str_replace('"',"&#34;",$temp);
    return $temp;
}
function UNDO_REMOVE_SPECIAL($str)
{
    $temp = str_replace("&#39;","'",$str);
    $temp = str_replace('&#34;','"',$temp);
    return $temp;
}
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
function make_bitly_url($url,$login,$appkey,$format = 'xml',$version = '2.0.1')
{
    //create the URL
    $bitly = 'http://api.bit.ly/shorten?version='.$version.'&amp;longUrl='.urlencode($url).'&amp;login='.$login.'&amp;apiKey='.$appkey.'&amp;format='.$format;
    
    //get the url
    //could also use cURL here
    $response = file_get_contents($bitly);
    
    //parse depending on desired format
    if(strtolower($format) == 'json')
    {
        $json = @json_decode($response,true);
        return $json['results'][$url]['shortUrl'];
    }
    else //xml
    {
        $xml = simplexml_load_string($response);
        return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
    }
}
?>