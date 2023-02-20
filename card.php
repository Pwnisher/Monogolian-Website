<?php
session_start();
  include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<body> 
 
<div class="container">
  <div class="card-deck">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <h2><p class="card-text">Pending</p></h2>
        <?php 
            $query3 = "SELECT status FROM cartform WHERE status = 1";
            $sql = mysqli_query($conn,$query3);

            if ($pending_total = mysqli_num_rows($sql)){
              echo '<h3>'.$pending_total.'</h3>';

            }
            else
            {
              echo 'no data';
            }
        ?>
        <h4>View Details</h4>
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">Accepted</p>
         <?php 
            $query4 = "SELECT status FROM cartform WHERE status = 2";
            $sql1 = mysqli_query($conn,$query4);

            if ($accepted_total = mysqli_num_rows($sql1)){
              echo $accepted_total;
            }
            else
            {
              echo 'no data';
            }
        ?>
      </div>
    </div>
    <div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">Rejected</p>
         <?php 
            $query5 = "SELECT status FROM cartform WHERE status = 3";
            $sql2 = mysqli_query($conn,$query5);

            if ($rejected_total = mysqli_num_rows($sql2)){
              echo $rejected_total;
            }
            else
            {
              echo 'no data';
            }
        ?>
      </div>
    </div>  
  </div>
</div>

</body>
</html>
