<?php 
function _cyg_event($campaign,$keyword)
{
	$url = "http://www.fancircuit.com/api/cyp.php";
	$fields = array('tracking_type' => "event",'campaignId' => $campaign, 'keyword' => $keyword);
	$opts = array('http' =>
		array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => http_build_query($fields)
		)
	);
	$context  = stream_context_create($opts);
	$output = file_get_contents($url, false, $context);
}
?>