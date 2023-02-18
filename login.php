<?php
session_start();
include "db_conn.php";

$uname = $_POST['uname'];
$password = $_POST['password'];

if($uname == "root" && $password == "ADMIN"){
			header ("location: fetch_data.php");
	}

else{

if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: indexlg.php?error=Username is required");
		exit();
	}
	else if (empty($pass)) {
		header("Location: indexlg.php?error=Password is required");
		exit();
	}
	else {
		$pass = md5($pass);
		
		$sql = "SELECT * FROM registration WHERE uname = '$uname' AND pass = '$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['uname'] === $uname && $row['pass'] === $pass) {
				$_SESSION['uname'] = $row['uname'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['logID'] = $row['logID'];
				header("Location: indexAcc.php");
				exit();
			}
			else {
			header("Location: indexlg.php?error=Incorrect Username or Password");
			exit();
			}
		}
		else {
			header("Location: indexlg.php?error=Incorrect Username or Password");
			exit();
		}
	}
}



else {
	header("Location: indexlg.php");
	exit();
}
}



?>