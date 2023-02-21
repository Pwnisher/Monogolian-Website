<?php
	include 'connection.php';

	

	$sql = "SELECT * FROM registration";



	$result = mysqli_query($connection,$sql);


	$customer_array = array();

	while($row = mysqli_fetch_assoc($result))
	{

		$customer_array[] = $row;

	}

	header('Content-type: application/json');
	echo json_encode($customer_array);

	//close the database connection

	mysqli_close($connection);

?>