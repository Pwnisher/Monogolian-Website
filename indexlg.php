<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./csslg/stylelg.css">
</head>
<body>
     <video autoplay loop muted plays-inline>
		<source src="./assets/video/mongolian.mp4" type="video/mp4" class="back-video">
	
     </video>
     <div class="hero">

	<img class = "logolg" src="./assets/img/logo.png">
	<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     	<a href="signup.php" class="su">Sign Up</a>
     </form>
     </div>
</body>
</html>
