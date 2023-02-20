<?php
session_start();
require 'connection.php';

$query = "SELECT * FROM registration";

$query2 = "SELECT * FROM cartform";

$result = mysqli_query($conn,$query);
$result2 = mysqli_query($conn,$query2);
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Mongolian Form </title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <style type="text/css">
     button a{
      text-decoration: none;
      color: black;
     }

     button a:hover{
      color: red;
     }
   </style>
<body>  		
  <div class="container">
    <img src="./assets/img/form banner.png">
    <div class="title"></div>
    <div class="content">

      <form autocompete = "off" action = "" method="post">
        <div class="user-details">

          <div class="input-box">
            <select hidden>
              <option type="text" id="logID"><?php echo $_SESSION['logID']?></option>
            </select>
          </div>
          <div class="input-box">
            <br>
            <span class="details">Client Name :</span>
              <input type="text" id="name" value="" required> <br>
          </div>

          <div class="input-box">
            <span class="details">Address / Venue :</span>
              <input type="text" id="address" value="" required> <br>
          </div>

          <div class="input-box">
            <span class="details">Contact :</span>
              <input type="tel" placeholder="09xxxxxxxxx" id="contact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="" required> 
          </div>

          <div class="input-box">
            <span class="details">Guaranteed Pax Covers :</span>
            <input type="number" placeholder="Minimum of 50 Pax" min="50" max="150" id = "pax" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Function :</span>
            <input type="date" id = "date" required>
          </div>
          <div class="input-box">
            <span class="details">Time of Function :</span>
            <input type="time" id = "time" required>
          </div>
        </div>

        <div class="TandC-details">
          <input type="radio" value = 1 name="TandC" id="dot-1">
          <input type="radio" value = 2 name="TandC" id="dot-2" >
          <span class="TandC-title">Tables & Chairs :</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="TandC">Catering Provided</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="TandC">Client Provided</span>
            <br><br>
          </label>

          </div>
        </div>

        <br>        
        <div class="menudetails">
          <div class="title">MENU</div><br>          
          <div class="check-box">
            <span class="options">Appetizer :</span>
           Fried Peanuts</span>
          </div>
          <div class="check-box">
            <span class="options">Vegetables :</span>
            <span class="menu-options">Assorted</span>
          </div>

          <div class="user-details">
          <div class="input-box">
            <span class="details"> Available Meats :</span>
            <input type="text" id="meat" placeholder = "Beef / Pork / Chicken" value="" required > <br>
          </div>
          </div>
          
          <div class="user-details">
          <div class="input-box">
            <span class="details"> Available Seafoods :</span>
            <input type="text" id="seafood" placeholder = "Squid / Squid Ball / Shrimp" value="" required > <br>
          </div>
          </div>
          
          <div class="check-box">
            <span class="options">Sauces :</span>
            <span class="menu-options">Mongolian</span>
            <span class="menu-options">Terriyaki</span>
            <span class="menu-options">Szechuan</span>
          </div>

          <div class="check-box">
            <span class="options">Others :</span>
            <span class="menu-options">Sesame Oil</span>
            <span class="menu-options">Chili Sauce</span>
            <span class="menu-options">Garlic Sauce</span>
            <div>
              <span class="menu-options">Brown Sugar</span>
              <span class="menu-options">Ground Peanuts</span>
              <span class="menu-options">Sesame Seeds</span>
            </div>
          </div>
        </div>

        <div class="Wrapper">
          <div class="reqname">Requests :</div>
            <textarea placeholder="Ex. Allergens / If Catering provided No. of tables & Chairs "></textarea>
        </div>

       <button type="button" onclick="submitData('insert');">Submit</button>

       <button name="button" class = "back"><a href="indexAcc.php"> Back </a></button>
      </form>
    </div>
  </div>

<!--
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
   JavaScript Bundle with Popper
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


  <script src="js/cart.js"></script>
-->

  <?php require 'script.php'; 
  ?>
</script>
</body>
</html>
