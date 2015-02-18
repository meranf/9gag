<?php
header('Access-Control-Allow-Origin: *');
if(isset($_POST["dbname"]) && isset($_POST["dbpass"]) && isset($_POST["dtable"]))
{
	//Get Data
	define("DBNAME", $_POST["dbname"]);
	define("DBPASS", $_POST["dbpass"]);
	define("DTABLE", $_POST["dtable"]);
	if(isset($_POST["dstart"]))define("DSTART", $_POST["dstart"]);else define("DSTART", 0);
	if(isset($_POST["dlimit"]))define("DLIMIT", $_POST["dlimit"]);else define("DLIMIT", 100);
	//Sql query to gather data
	$sql = "SELECT * FROM ".DTABLE." LIMIT ".DSTART.", ".DLIMIT;
	$sqlcount = "SELECT COUNT(*) as totalrecords FROM ".DTABLE;
	$totalrow = mysql_fetch_assoc(db_execute_return($sqlcount));
	$result = db_execute_return($sql);
	
	$finalset = array();
	while($row = mysql_fetch_assoc($result))
	{
		$individual_field_set=array();
		foreach($row as $key=>$value)
		{
			$individual_field_set[$key]=utf8_encode($value);	
		}
		$finalset[]=$individual_field_set;
	}
	$return["data"]=$finalset;
	$return["total"]=$totalrow["totalrecords"];
	$return["status"]="Success";
}
else
{
	$return["status"]="Error";	
}
echo json_encode($return);
//DB CONNECT FUNCTIONS
function db_connect(){ $connection = mysql_connect("localhost", DBNAME, DBPASS);mysql_select_db(DBNAME, $connection);return $connection; }
function db_execute_return($sql){ $conn = db_connect(); $var = mysql_query($sql); mysql_close($conn); return $var; }
?>