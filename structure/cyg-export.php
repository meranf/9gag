<?php
header('Access-Control-Allow-Origin: *');
if(isset($_REQUEST["dbname"]) && isset($_REQUEST["dbuser"]) && isset($_REQUEST["dbpass"]) && isset($_REQUEST["dtable"]) && isset($_REQUEST["format"]))
{
	define("DBNAME", $_REQUEST["dbname"]);
	define("DBUSER", $_REQUEST["dbuser"]);
	define("DBPASS", $_REQUEST["dbpass"]);
	define("DTABLE", $_REQUEST["dtable"]);
	$format = $_REQUEST['format'];
	$dtable = $_REQUEST['dtable'];
	$file = $dtable.date("Ymdhis").'.'.$format;	
	
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment;filename='.$file);

	$result_header = db_execute_return('DESCRIBE`'.$dtable.'`');
	while ($row_header = mysql_fetch_array($result_header)) 
	{
		$field  = str_replace("_"," ",$row_header['Field']);
		$field  = ucwords($field);
		$header[] = $field;
	}	
	echocsv($header);   
	
	$result = db_execute_return('SELECT * FROM `'.$dtable.'`');
	$row = mysql_fetch_assoc($result);
	while ($row) {
		echocsvrow($row);
		$row = mysql_fetch_assoc($result);
	}

	//die();
}
else
{
	echo "Error";
}

//echo json_encode($return);

function echocsv($fields)
{
    $separator = '';
    foreach ($fields as $field) {
        if (preg_match('/\\r|\\n|,|"/', $field)) {
            $field = '"' . str_replace('"', '""', $field) . '"';
        }
        echo $separator . $field;
        $separator = ',';
    }
    echo "\r\n";
}

function echocsvrow($fields)
{
    $separator = '';
    foreach ($fields as $field) {

        if (preg_match('/\\r|\\n|,|"/', $field)) {
            $field = '"' . str_replace('"', '""', $field) . '"';
        }
        echo $separator . $field;
        $separator = ',';
    }
    echo "\r\n";
}

//DB CONNECT FUNCTIONS
function db_connect(){ $connection = mysql_connect("localhost", DBUSER, DBPASS);mysql_select_db(DBNAME, $connection);return $connection; }
function db_execute_return($sql){ $conn = db_connect(); $var = mysql_query($sql); mysql_close($conn); return $var; }

?>