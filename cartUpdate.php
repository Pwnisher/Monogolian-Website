<?php
    /*
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $url="https://";
    }
    else{
        $url ="https://";
        $url.-$_SERVER['HTTP_HOST'];
        $url.=$_SERVER['REQUEST_URI'];
        $url;
    }


$page=$url;
$sec="5";
*/
?>
<?php


session_start();
?>


<?php
include 'connection.php';
$sql = mysqli_query($conn,"SELECT * from cartform");


    if(isset($_GET['cartID']) && isset($_GET['status'])){
        $cartID = $_GET['cartID'];
        $status = $_GET['status'];
        mysqli_query($conn,"UPDATE cartform set status = '$status' WHERE cartID = '$cartID'");
        header("location:fetch_data.php");
        die();
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec; ?>" URL = "<?php echo $page; ?>">
    <title>My CRUD web page</title>


    <!-- External CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
   
   <link rel ="stylesheet" href="css/cartUpdate.css">
</head>


<body>
<section id ="top">
        <header>
                <a href = "#top"><img class = "logo" src="./assets/img/logonobg.png"></a>
       
                <ul>
                    <li class = "bg"><a href="#"><?php echo $_SESSION['fname']; ?></a></li>
                </ul>
        </header>
</section>
   <br>


    <h1><center>RESERVATION DETAILS</center></h1>
   
    <a href="indexAcc.php"><button class ="button" type = "button">Back</button></a>
    <div class="container2">
        <table class="customer-table">
            <thead>
                <th>reservation id</th>
                <th>User ID</th>
                <th>Names</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Pax</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Delete</th>
            </thead>
            <tbody>




            <?php
             require 'connection.php';


              $query =  "SELECT * FROM cartform WHERE logID = '".$_SESSION['logID']."' ";
              $rows = mysqli_query($conn,$query);
              $i = 1;
              ?>


              <?php foreach($rows as $row) : ?>
              <tr   id = <?php echo $row["cartID"]; ?>>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["logID"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["cont"]; ?></td>
                    <td><?php echo $row["pax"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["time"]; ?></td>
                    <td>
                        <?php
                            if($row["status"] == 1){
                                echo "pending";
                            }
                            else if($row["status"] == 2){
                                echo "Accept";
                            }
                            else if($row["status"] == 3){
                                echo "Reject";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($row["status"] == 1){
                                echo '
                                        <button
                                         type="button"
                                            onclick="submitData('.$row['cartID'].')">
                                           Delete</button>';
                            }
                            else if($row["status"] == 2){
                                echo '
                                        <button
                                         type="button"
                                            onclick="submitData('.$row['cartID'].')"
                                            disabled>
                                           Delete</button>';
                            }
                            else if($row["status"] == 3){
                                echo '
                                        <button
                                         type="button"
                                            onclick="submitData('.$row['cartID'].')">
                                           Delete</button>';
                            }
                        ?>
                    </td>
                </tr>      
                <?php endforeach; ?>
            </tbody>


        </table>
        <?php require 'script.php'; ?>  
    </div>


    <script type="text/javascript">
       
        function status_update(value,cartID)
        {
            //alert(cartID);
            let url = "https://localhost/website/fetch_data.php";
            window.location.href= url+"?cartID="+cartID+"&status="+value;
        }




       
    </script>


   
</body>
   




</html>



