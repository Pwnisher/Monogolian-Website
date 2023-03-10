<?php 
session_start();

if (isset($_SESSION['logID']) && isset($_SESSION['uname'])) {
?>


<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mongolian Grill the Original</title>

	<link rel="stylesheet" href="css/indexAccStyle.css">
	<script src="https://kit.fontawesome.com/d965d128b9.js" crossorigin="anonymous"></script>
	<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</head>
<body>


	<div id="loading"></div>
<!--------------------------- HEADER --------------------------------->
<section id ="top">
		<header>
				<a href = "#top"><img class = "logo" src="./assets/img/logonobg.png"></a>
		
			<ul>
					<li class="links"></li>
					<li class="links"><a href="#about">About</a></li>
					<li class="links"><a href="#services">Service</a></li>
					<li class="links"><a href = "#Book"> Book</a></li>
					<li class="links"><a href="#contact">Contact</a></li>
					<li class="links"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
						<ul class="dropdown center">
							<li>Reservation</li>
							<li><a href="cartUpdate.php">Update</a></li>
						</ul>
					</li>
					<li class = "bg"><a href="#"><?php echo $_SESSION['fname']; ?></a>
						<ul class="dropdown">
							<li><a href="index.php">logout</a></li>
						</ul>
					</li>
			</ul>
		</header>

	<div class="background-image">
		<div class = "caption-item">
				<ul>
					<li><h1>Elevating your event, one <br> bite at a time</h1></li>
					<li><hr class = "divider" /></li>
	
					<li><p>The Mongolian Grill the Original is a dining experience like no other,<br>renowned for its unique and interactive approach to preparing meals.</p></li>

					<li><a href="#about">
						<h1 class = "button-book button-book-modif">FIND OUT MORE</h1></a>
					</li>
				</ul>
		</div>
	</div>
</section>
<!--------------------------- ABOUT SECTION ---------------------------->
<section id="about">

	<div class="container">
            <div class="caption-item-1">
                <ul>
                        <li><h2>We've got what you need!</h2></li>
						<li><hr class = "divider divider-light" /></li>

                        <li><p>Diners have the opportunity to customize their meal by selecting their preferred<br> ingredients and sauce, which are then expertly prepared on a round-shaped grill by skilled chefs.</p></li>
                       
                        <li><a class="btn btn-light btn-xl" href="#services">Get Started!</a></li>
                </ul>
            </div>
	</div>

<!--------------------------- ABOUT second SECTION ---------------------------->
	<div class="container-1">
		<div class = "caption-item-2">

			<div class = "box box-modif">
			<ul>
				<li><h2>Savor the diversity of flavors, made to your likings</h2></li>
				<li><p>Guests are presented with a wide array of raw ingredients, including thinly sliced meats such as pork, chicken, beef, shrimp, squid, and squid balls, as well as a variety of vegetables including onion, onion leaves, carrots, cabbage, lettuce, bean sprouts, bell peppers, and turnip. <br><br> 

				The Mongolian Grill the Original offers a truly one-of-a-kind culinary experience that is sure to delight the senses and satisfy even the most discerning palate.</p></li>
			</ul>
			</div>

		
				
		<div class="box box-modif">

		<div class="card">
		  <div class="card-item item--1">
		    <div class="itemLabel1">
		    	<div class="text">9+</div>
		    	<span class="subtext">Vegetables</span>
		    </div>
		  </div>
		  <div class="card-item item--2"> 
		    <div class="itemLabel2">
		    	<div class="text">6+</div>
		    	<span class="subtext">Meats</span>
		    </div>
		  </div>
		  <div class="card-item item--3">
		    <div class="itemLabel3">
		    	<div class="text">5+</div>
		    	<span class="subtext">Sauces</span>
		    </div>
		  </div>
		  <div class="card-item item--4">
		    <div class="itemLabel4">
		    	<div class="text">28+</div>
		    	<span class="subtext">Variations</span>
		    </div>
		  </div>
		</div>
		</div>
		</div>
	</div>

	<div class="container-5">
	<div class = "gallery">
  <div class="clipped-border">
    <img class ="g1" src="./assets/img/gal1.jpg" id="clipped">
  </div>
  <div class="clipped-border">
    <img class ="g2" src="./assets/img/gal2.jpg" id="clipped">
  </div>
  <div class="clipped-border">
    <img class ="g3" src="./assets/img/gal3.jpg" id="clipped">
  </div>
    <div class="clipped-border">
    <img class ="g4" src="./assets/img/gal4.jpg" id="clipped">
  </div>
    <div class="clipped-border">
    <img class ="g5" src="./assets/img/gal5.jpg" id="clipped">
  </div>
  <h1 class="galTitle">Functions</h1>
  <lord-icon
    src="https://cdn.lordicon.com/xxdqfhbi.json"
    trigger="hover"
    class="galIcon">
</lord-icon>
</div>
</div>

</section>

<!--------------------------- SERVICES SECTION  ---------------------------->
<section id="services">
	<div class="container-2">
			<ul>
					<li><h1>At Your Service</h1></li>
					<li><hr class = "divider" /></li>
			</ul>


		<div class="caption-item-3">
			<div class = "box">
				<ul>
					<li><lord-icon
    						src="https://cdn.lordicon.com/ibzzbohe.json"
    						trigger="hover"
    						colors="outline:#121331, primary:#f9a03f,tertiary:#92140c"
    						style="width:80px;height:80px">
						</lord-icon></li>
					<li><h1>Savory<br> Dishes</h1></li>
					<li><p>We offers a variety of delicious and carefully prepared foods where options are customizable to meet individual tastes and dietary needs.</p></li>
				</ul>
			</div>

			<div class = "box">
				<ul>
					<li><lord-icon
    						src="https://cdn.lordicon.com/tafnmaar.json"
    						trigger="hover"
    						colors="primary:#f9a03f,secondary:#ebe6ef,tertiary:#121331"
    						style="width:80px;height:80px">
						</lord-icon></li>
					<li><h1>Kitchen<br> Masters</h1></li>
					<li><p>Cooks in Mongolian Grill are experienced and skilled in creating diverse, flavorful, and visually appealing dishes to delight guests.</p></li>
				</ul>
			</div>

			<div class = "box">
				<ul>
					<li><lord-icon
    					src="https://cdn.lordicon.com/ssrjvcah.json"
    					trigger="hover"
    					colors="primary:#ebe6ef,secondary:#121331,tertiary:#c71f16,quaternary:#ffc738"
    					style="width:80px;height:80px">
						</lord-icon></li>
					<li><h1>Ensured<br> Quality</h1></li>
					<li><p>Our service quality strives to consistently provide prompt, professional, and friendly service to enhance the dining experience for guests.</p></li>
				</ul>
			</div>

			<div class = "box">
				<ul>
					<li><lord-icon
    						src="https://cdn.lordicon.com/lcucqigi.json"
    						trigger="hover"
    						style="width:80px;height:80px">
						</lord-icon></li>
					<li><h1>Satisfaction Guaranteed</h1></li>
					<li><p>Our catering service guarantees customer satisfaction through expertly crafted cuisine and exceptional service, ensuring a truly enjoyable and memorable event for all guests.</p></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<br>
<!--------------------------- UNKNOWN SECTION  ---------------------------->
<section id="Book">
		<div class="container-3">
			<ul>
				<li><h1 class="title"> Start Your Reservation! </h1></li>
				<li><a href="cart.php"><h1 class = "button-book">BOOK NOW!</h1></a></li>
			</ul>
		</div>
</section>
	
<!--------------------------- CONTACT SECTION  ---------------------------->


<section id="contact">	
	<div class="container-4">
            <div class="caption-item-4">
                <ul>
                        <li><h2>Let's Get In Touch</h2></li>
						<li><hr class = "divider" /></li>

                        <li><p>We'd love to hear from you and learn more about your catering needs. Whether you're planning a large event or an intimate gathering, we're here to help make it a success. Get in touch with us today to see how we can make your next event unforgettable.</p></li>
                       
                </ul>
            </div>


            <div class="form-wrapper">
                <form action="https://formspree.io/f/mgebajop" method="POST">
                	<input class = "name" type="text" name="Fullname" placeholder = "   Full name "><br>
					<input class = "email" type="text" name="Email" placeholder="   Email Address"><br>
					<input class = "phone" type="text" name="Phone" placeholder="   Phone Number"><br>
					<textarea class = "message" type="text" placeholder="   Message / Concerns"></textarea><br>
					<button type="submit" class = "button button-formsubmit">SUBMIT</button>
                </form>
            </div>

            <p class = "footer">Copyright &copy; 2022 - Mongolian Grill The Original</p>
	</div>
</section>


<!--------------------------- java script loader ---------------------------->
	<script src="js/scripts.js">
	</script>
</body>
</html>

<?php
}
else {
	header("Location: indexlg.php");
	exit();
}
?>