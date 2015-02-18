<?php  
//Session start
ini_set('session.name', 'TOBLERONEFILMADMIN');
session_start();


//Set session cookie lifetime to 2 weeks
$SessionLifeTime = 1209600;
setcookie(session_name(),session_id(),time()+$SessionLifeTime);

//Error reporting
if($_SERVER['HTTP_HOST']=='localhost'){
	error_reporting(1);
}else{
	error_reporting(1);
}
if (isset($_REQUEST['devMode']))
{
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
}

// MEM-CACHE 
$mem_ip 						= '127.0.0.1';
$mem_port						= '11211';
$mem_global_key					= 'TOBLERONEFILM';

if($_SERVER['HTTP_HOST']=='localhost')
{ 
	define('MEMCACHE_ON_OFF', 		0);
} else { 
	define('MEMCACHE_ON_OFF', 		1);
}
define('MEM_IP', 				$mem_ip);
define('MEM_PORT', 				$mem_port);
define('MEM_GLOBAL_KEY', 		$mem_global_key);

// Database Settings
define('DB_HOST', 				'localhost');


if ($_SERVER['HTTP_HOST'] == 'localhost') 
{
	// Database Settings
	define('DB_USER', 			'root');
	define('DB_NAME', 			'tobleroneflim');
	define('DB_PASSWORD', 		'');
	
	// Site Settings
	define('WEBSITE_URL',		'http://localhost/toblerlive/');
	define('DOC_ROOT',			'C:/xampp/htdocs/toblerlive/');
}
else
{
	 
	// Site Settings
	/*if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
		define('WEBSITE_URL',		'https://www.tobleronefilms.com/');
	}else{
		define('WEBSITE_URL',		'http://www.tobleronefilms.com/');
	}*/
	
	if (isset($_SERVER["HTTPS"]))
	$page_scheme = "https:";
	else
	$page_scheme = "http:";
	
	define('WEBSITE_URL',		$page_scheme.'//'.$_SERVER['HTTP_HOST'].'/');

	define('DOC_ROOT',			    '/var/www/tobleronefilms.com/');
}
	define('DB_USER', 			'tobler');
	define('DB_NAME', 			'toblerone');
	define('DB_PASSWORD', 		"danishj");
	

define('CUSTOMER_PAGE_URL',		'http://www.facebook.com/tobleronefilm/app_684030251688212');
define('CUSTOMER_APP_ID', 		'684030251688212');
define('CUSTOMER_SECRET', 		'59fedb9ceb0dfd8ebc55df19ebfc0f75');
define('API_KEY', 				'684030251688212');
define('APP_NAME', 				'Toblerone Flim');
define('SHORT_LINK',            '');

// Analytics
define('CAMPAIGN_ID',         	'');
include_once DOC_ROOT."structure/cyg-event-tracking-php.php";

// Memcache defined keys
include_once (DOC_ROOT.'structure/memKeys.php');

// Database connection lib
include_once (DOC_ROOT.'structure/clsGeneral.php');

// Library file contain all general functions
include_once (DOC_ROOT.'structure/lib.php');

// Memcache
include_once (DOC_ROOT.'structure/gMemcache.php');
include_once (DOC_ROOT.'structure/memcache.php');

?>