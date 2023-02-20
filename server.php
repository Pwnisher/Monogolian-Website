<?php
	include 'connection.php';

    $query =  "SELECT * FROM cartform WHERE logID = '".$_POST['logID']."' ";

	$result = mysqli_query($connection, $query);

	$empRecord_array = array();
	while($row = mysqli_fetch_assoc($result))
	{
		$empRecord_array[] = $row;
	}

	header('Content-type: application/json');
	echo json_encode($empRecord_array);

	//closing the connection

	mysqli_close($connection);
?>