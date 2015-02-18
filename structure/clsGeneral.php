<?php
function db_connect()
{
	$connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_query("set character_set_server='utf8'");
	mysql_query("set names 'utf8'");
	mysql_select_db(DB_NAME, $connection);

	return $connection;
}

function db_execute_other($dml_command,$db)
{
	 $conn = db_connect_other($db);
	 mysql_query($dml_command);
	 mysql_close($conn);
}

function db_execute($dml_command)
{
	 $conn = db_connect();
	 $var = mysql_query($dml_command);
	 mysql_close($conn);
	 return $var;
}
function db_multi_execute($dml_command)
{
	 $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	 $var = $mysqli->multi_query($dml_command);
	 $mysqli->close();
	 return $var;
}
function db_execute_return($sql)
{
	$conn = db_connect();
	$var = mysql_query($sql) or die(debug($sql).mysql_error());
	mysql_close($conn);
	return $var;
}

function db_execute_count($sql)
{
	$conn 	= db_connect();
	$query 	= mysql_query($sql) or die(debug($sql).mysql_error());
	$var 	= mysql_num_rows($query);
	mysql_close($conn);
	return $var;
}

function getLastId()
{
	$conn 	= db_connect();
	$id = mysql_insert_id();
	return $id;
}

function getNextId($table, $column)
{
	$query = db_execute_return("SELECT MAX($column) as Value FROM $table");
	if(mysql_num_rows($query) > 0)
	{
		$result = mysql_fetch_array($query);
		$nextval = $result[0] + 1;
		return $nextval;
	}
	else
		return 1;
}

function db_max_id($table, $column)
{
	$sql = "SELECT MAX($column) as Value FROM $table";
	$res = db_execute_return($sql);
	$row = mysql_fetch_row($res);
	if($row[0] != '' and $row[0] > 0)
	{
		return $row[0];
	}
	else
	{
		return 0;
	}
}

function debug($sql)
{
	$debugging = true; // keep it on during project development
	if($debugging)
	{
		echo $sql."<br>\n";
	}
}


/// function to return single line  values
function  db_execute_return_single($sql)
{
	$conn 	= db_connect();
	$query 	= mysql_query($sql) or die(debug($sql).mysql_error());
	$var 	= mysql_fetch_assoc($query);
	mysql_close($conn);
	return $var;
}


function mysql_query_string($string)
{
	$conn = db_connect();
	$enabled = true;
	$htmlspecialchars = false; # Convert special characters to HTML entities 
	/****************************************************************
	The translations performed are: 

	'&' (ampersand) becomes '&amp;' 
	'"' (double quote) becomes '&quot;' when ENT_NOQUOTES is not set. 
	''' (single quote) becomes '&#039;' only when ENT_QUOTES is set. 
	'<' (less than) becomes '&lt;' 
	'>' (greater than) becomes '&gt;' 

	*****************************************************************/
	
	if($htmlspecialchars)
	{
		# Convert special characters to HTML entities 
		$string = htmlspecialchars($string, ENT_QUOTES);
	}
	else
	{
		/****************************************************************
		'"' (double quote) becomes '&quot;' 
		''' (single quote) becomes '&#039;' 
		****************************************************************/
		//$string = str_replace('"',"&quot;",$string);
		//$string = str_replace("'","&#039;",$string);
	}
	if($enabled and gettype($string) == "string")
	{
		# Escapes special characters in a string for use in a SQL statement
		
		
		$res =  mysql_real_escape_string(trim($string));
		mysql_close($conn);
		return $res;
	}
	elseif($enabled and gettype($string) == "array")
	{
		$ary_to_return = array();
		foreach($string as $str)
		{
				$ary_to_return[]=mysql_real_escape_string(trim($str));
		}
		$res=  $ary_to_return;
		mysql_close($conn);
		return $res;
	}
	else
	{
		$res=  trim($string);
		mysql_close($conn);
		return $res;
	}
}
?>