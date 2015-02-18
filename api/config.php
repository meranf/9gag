<?php  
//Session start
ini_set('session.name', '9gags');
session_start();

//Set session cookie lifetime to 2 weeks
/*$SessionLifeTime = 1209600;
setcookie(session_name(),session_id(),time()+$SessionLifeTime);*/

//Error reporting
if($_SERVER['HTTP_HOST']=='localhost'){
	error_reporting(1);
}else{
	error_reporting(0);
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
	define('DB_NAME', 			'9gag');
	define('DB_PASSWORD', 		'');
	
	// Site Settings
	define('WEBSITE_URL',		'http://localhost/9gag/');
	define('DOC_ROOT',			'C:/xampp/htdocs/9gag/');
}
else
{
	// Database Settings
	define('DB_USER', 			'iqbal89_video');
	define('DB_NAME', 			'iqbal89_video');
	define('DB_PASSWORD', 		"TKsdx=ST#?T~");
	
	// Site Settings
 	if (isset($_SERVER["HTTPS"]))
	$page_scheme = "https:";
	else
	$page_scheme = "http:";
	
	define('WEBSITE_URL',		$page_scheme.'//'.$_SERVER['HTTP_HOST'].'/9gag/');
	
	define('DOC_ROOT',			    '/home/iqbal89/public_html/9gag/');
}
	 
	
 define('CUSTOMER_APP_ID', 		'863460623710098');
define('CUSTOMER_SECRET', 		'3900a7dbd44dd041525fd22b3cd98df9');
define('API_KEY', 				'863460623710098');
define('APP_NAME', 				'9 Gag ');
define('SHORT_LINK',            '');
define('THIS_PAGE',    basename($_SERVER['PHP_SELF']));
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

//Main functions
include_once (DOC_ROOT.'api/functions.php');
include_once(DOC_ROOT.'structure/UploadHandler.php');
//Mobile detection
include_once (DOC_ROOT.'structure/Mobile_Detect.php');

$detect = new Mobile_Detect; 
if($detect->isMobile()){
	$is_mobile = true;
}else{
	$is_mobile = false;
}
if($detect->isTablet()){
	$isTablet = true;
}else{
	$isTablet = false;
}
 


?>