<?php 
session_start();

if (isset($_SESSION['logID']) && isset($_SESSION['uname'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="./csslg/stylelg.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['fname']; ?>
     <a href="logout.php">Logout</a>
     </h1>
</body>
</html>

<?php
}
else {
	header("Location: indexlg.php");
	exit();
}
?>