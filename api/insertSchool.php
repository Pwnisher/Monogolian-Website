<?php
include 'connection.php';

	//check connection

	if(!$connection){
		die("connection failed" . mysqli_connect_error);
	}

	$sql = "INSERT INTO registration (fname, lname, contact, email) ".
	"VALUES ('".$_POST["fname"] ."', " .
		"'" . $_POST["lname"] ."', " .
		"'" . $_POST["contact"] ."', " .
		"'" . $_POST["email"] ."', )";

		//echo $sql;

		$connection->query($sql);
		echo $connection->insert_id;
?>