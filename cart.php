<?php
  
  require 'connection.php';

  if (isset($_POST["submit"])){
    $clientName = $_POST["clientName"];
    $clientContact = $_POST["clientContact"];
    $clientEmail = $_POST["clientEmail"];
  }

  $query = "INSERT INTO userinfo VALUES('$clientName', '$clientContact', '$clientEmail')";
   mysqli_query($connection,$query);

   echo 
   "
   <script> alert('Data Inserted Successfully'); </script>
   ";

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Mongolian Form </title>
    <link rel="stylesheet" href="css\cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>  		
  <div class="container">
    <img src="./assets/img/form banner.png">
    <div class="title"></div>
    <div class="content">
<<<<<<< Updated upstream:cart.html
      <form action="https://formspree.io/f/mgebajop" method="POST">
=======

      <form class ="" action="" autocomplete="off">
>>>>>>> Stashed changes:cart.php
        <div class="user-details">
          <div class="input-box">
            <br>
            <span class="details">Client Name :</span>
            <input type="text" name = "clientName" required>
          </div>

          <div class="input-box">
            <span class="details">Contact Number :</span>
            <input type="text" name="clientContact" required>
          </div>

          <div class="input-box">
            <span class="details">Email address :</span>
            <input type="text" name = "clientEmail" required>
          </div>


          <div class="input-box">
            <span class="details">Address/Venue :</span>
            <input type="text" required>
          </div>

          <div class="input-box">
            <span class="details">Guaranteed Pax Covers :</span>
            <input type="number" placeholder="Minimum of 50 Pax" min="50" max="150" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Function :</span>
            <input type="date" required>
          </div>
          <div class="input-box">
            <span class="details">Time of Function :</span>
            <input type="time" required>
          </div>
        </div>

        <div class="TandC-details">
          <input type="radio" name="TandC" id="dot-1">
          <input type="radio" name="TandC" id="dot-2">
          <span class="TandC-title">Tables & Chairs :</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="TandC">Catering Provided</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="TandC">Client Provided</span>
          </label>
          </div>
        </div>
        <br>        
        <div class="menudetails">
          <div class="title">MENU</div><br>          
          <div class="check-box">
            <span class="options">Appetizer :</span>
            <input type="checkbox">
            <span class="menu-options">Fried Peanuts</span>
          </div>
          <div class="check-box">
            <span class="options">Vegetables :</span>
            <input type="checkbox">
            <span class="menu-options">Assorted</span>
          </div>
          <div class="check-box">
            <span class="options">Meats :</span>
            <input type="checkbox">
            <span class="menu-options">Beef</span>
            <input type="checkbox">
            <span class="menu-options">Pork</span>
            <input type="checkbox">
            <span class="menu-options">Chicken</span>
          </div>
          <div class="check-box">
            <span class="options">Seafoods :</span>
            <input type="checkbox">
            <span class="menu-options">Shrimp</span>
            <input type="checkbox">
            <span class="menu-options">Squid</span>
            <input type="checkbox">
            <span class="menu-options">Squid Balls</span>
          </div>
          <div class="check-box">
            <span class="options">Sauces :</span>
            <input type="checkbox">
            <span class="menu-options">Mongolian</span>
            <input type="checkbox">
            <span class="menu-options">Terriyaki</span>
            <input type="checkbox">
            <span class="menu-options">Szechuan</span>
          </div>
          <div class="check-box">
            <span class="options">Others :</span>
            <input type="checkbox">
            <span class="menu-options">Sesame Oil</span>
            <input type="checkbox">
            <span class="menu-options">Chili Sauce</span>
            <input type="checkbox">
            <span class="menu-options">Garlic Sauce</span>
            <div>
              <input type="checkbox">
              <span class="menu-options">Brown Sugar</span>
              <input type="checkbox">
              <span class="menu-options">Ground Peanuts</span>
              <input type="checkbox">
              <span class="menu-options">Sesame Seeds</span>
            </div>
          </div>
        </div>

        <div class="Wrapper">
          <div class="reqname">Requests :</div>
            <textarea placeholder="Write your requests here..."></textarea>
        </div>

        <div class="button">
          <input type="submit" name="submit" value="SUBMIT">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
