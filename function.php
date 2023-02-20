<?php
require 'connection.php';

if(isset($_POST["action"])){
    
    if($_POST["action"] == "insert"){
      insert();
    }
    else{
      delete();
    }
  
}


function insert(){
  global $conn;

  $logID = $_POST["logID"];
  $name = $_POST["name"];
  $address = $_POST["address"];
  $contact = $_POST["contact"];
  $pax = $_POST["pax"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $status = $_POST['status'] = 1;

  if($name != "" && $address != "" && $contact != ""  && $pax != "" && $date != "" && $time != ""){
  $query = "INSERT INTO cartform VALUES('','$logID','$name', '$address', '$contact', '$pax', '$date', '$time','$status')";
  
  mysqli_query($conn, $query);
  echo "Inserted Successfully";
  }
  else{
    echo "please fill all the fields";

  }

  }

function delete(){
  global $conn;

  $id = $_POST["action"];

  $query = "DELETE FROM cartform WHERE cartID = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}
