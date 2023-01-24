<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="./css/signupstyle.css">
</head>
<body>
     <form action="signupCheck.php" method="post">
     	<h2>REGISTER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

		<!-- FIRST NAME-->
     	<?php if (isset($_GET['fname'])) { ?>
     			<input type="text" 
     			class="fnInput" 
     			name="fname" 
     			placeholder="Firstname"
     			value="<?php echo $_GET['fname']; ?>">
     	<?php } 
     		else { ?>
     			<input type="text" 
     			class="fnInput" 
     			name="fname" 
     			placeholder="Firstname">
     		<?php }?>

     	<!-- LAST NAME-->
     	<?php if (isset($_GET['lname'])) { ?>
     			<input type="text" 
     			class="lnInput" 
     			name="lname" 
     			placeholder="Lastname"
     			value="<?php echo $_GET['lname']; ?>">
     	<?php } 
     		else { ?>
     			<input type="text" 
     			class="lnInput" 
     			name="lname" 
     			placeholder="Lastname"><br>
     		<?php }?>

     	<!-- CONTACT -->
     	<?php if (isset($_GET['contact'])) { ?>
     			<input type="text" 
     			class="conInput" 
     			name="contact" 
     			placeholder="Contact No."
     			value="<?php echo $_GET['contact']; ?>">
     	<?php } 
     		else { ?>
     			<input type="text" 
     			class="conInput" 
     			name="contact" 
     			placeholder="Contact">
     		<?php }?>

     	<!-- EMAIL -->
     	<?php if (isset($_GET['email'])) { ?>
     			<input type="text" 
     			class="emInput" 
     			name="email" 
     			placeholder="Email"
     			value="<?php echo $_GET['email']; ?>">
     	<?php } 
     		else { ?>
     			<input type="text" 
     			class="emInput" 
     			name="email" 
     			placeholder="Email"><br>
     		<?php }?>

     	<!-- USERNAME -->
     	<?php if (isset($_GET['uname'])) { ?>
     			<input type="text" 
     			name="uname" 
     			placeholder="Username"
     			value="<?php echo $_GET['uname']; ?>">
     	<?php } 
     		else { ?>
     			<input type="text" 
     			name="uname" 
     			placeholder="Username"><br>
     		<?php }?>

     	<!-- PASSWORD -->
     	<input type="password" name="password" placeholder="Password"><br>

     	<input type="password" name="conpassword" placeholder="Confirm Password"><br>

     	<button type="submit">Sign Up</button>
     	<a href="indexlg.php" class="su">Already have an account?</a>
     </form>
</body>
</html>
