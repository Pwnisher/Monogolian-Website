<?php
session_start();
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])
	&& isset($_POST['fname']) && isset($_POST['lname'])
	&& isset($_POST['contact']) && isset($_POST['email'])
	&& isset($_POST['conpassword'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$contact = validate($_POST['contact']);
	$email = validate($_POST['email']);
	$conpassword = validate($_POST['conpassword']);

	$user_data = 'uname='. $uname. '&fname='. $fname;

	if (empty($uname)) {
		header("Location: signup.php?error=Username is required&$user_data");
		exit();
	}
	else if (empty($pass)) {
		header("Location: signup.php?error=Password is required&$user_data");
		exit();
	}
	else if (empty($fname)) {
		header("Location: signup.php?error=Firstname is required&$user_data");
		exit();
	}
	else if (empty($lname)) {
		header("Location: signup.php?error=Lastname is required&$user_data");
		exit();
	}
	else if (empty($contact)) {
		header("Location: signup.php?error=Contact number is required&$user_data");
		exit();
	}
	else if (empty($email)) {
		header("Location: signup.php?error=Email Address is required&$user_data");
		exit();
	}
	else if (empty($conpassword)) {
		header("Location: signup.php?error=Please confirm your password&$user_data");
		exit();
	}
	else if ($pass !== $conpassword) {
		header("Location: signup.php?error=Password does not match&$user_data");
		exit();
	}
	else {
		$pass = md5($pass);

		$sql = "SELECT * FROM registration WHERE uname = '$uname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Username is already taken&$user_data");
			exit();
		}
		else {
			$sql2 = "INSERT INTO registration(fname, lname, contact, email, uname, pass)
			VALUES('$fname', '$lname', '$contact', '$email', '$uname', '$pass')";

			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
				header("Location: signup.php?success=Successfully Registered!");
				exit();
			}
			else {
				header("Location: signup.php?error=Unknown error occured.");
				exit();
			}
		}
			/*$row = mysqli_fetch_assoc($result);
			if ($row['uname'] === $uname && $row['pass'] === $pass) {
				$_SESSION['uname'] = $row['uname'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['logID'] = $row['logID'];
				header("Location: home.php");
				exit();
			}
			else {
			header("Location: signup.php?error=Incorrect Username or Password");
			exit();
			}
		}
		else {
			header("Location: signup.php?error=Incorrect Username or Password");
			exit();
		}*/
	}
}
else {
	header("Location: signup.php");
	exit();
}
?>