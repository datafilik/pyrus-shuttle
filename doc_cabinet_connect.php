<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "";
	
	function dbconnect($db){
		global $dbhost, $dbuser, $dbpass;
		$dblink = @mysqli_connect($dbhost, $dbuser, $dbpass) or die('Failed to connect to db server'.mysqli_connect_error());
		mysqli_select_db($dblink, $db) or die('Could not select db'.mysqli_error($dblink));
		
		return $dblink;
	}
?>
