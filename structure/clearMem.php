<?php include_once "../api/config.php"; // including constants
error_reporting(E_ALL);
/* procedural API */
$memcache_obj = memcache_connect("localhost","11211");
//var_dump($memcache_obj);
$T = memcache_flush($memcache_obj);

echo $T ;
?>