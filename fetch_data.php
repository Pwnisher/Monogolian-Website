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
	<title>Mongolian Admin</title>

	<!-- External CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel ="stylesheet" href="css/fetch_data.css">
	
</head>
<body>
		<header>
				<a href = "#top"><img class = "logo" src="./assets/img/logonobg.png"></a>
		
			<ul>
					<li class = "bg"><a href="#">ADMIN</a>
						<ul class="dropdown">
							<li><a href="index.php">logout</a></li>
						</ul>
					</li>
			</ul>
		</header>


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
	              echo '<h3>'.'0'.'</h3>';
	            }
	        ?>

				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
				  View Details
				</button>

	      </div>
	    </div>
	    <div class="card bg-success">
	      <div class="card-body text-center">
	        <h2><p class="card-text">Accepted</p></h2>
	         <?php 
	            $query4 = "SELECT status FROM cartform WHERE status = 2";
	            $sql1 = mysqli_query($conn,$query4);

	            if ($accepted_total = mysqli_num_rows($sql1)){
	              echo '<h3>'.$accepted_total.'</h3>';
	            }
	            else
	            {
	              echo '<h3>'.'0'.'</h3>';
	            
	            }
	        ?>

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: #198754; border: none;">
				  View Details
				</button>
	      </div>
	    </div>
	    <div class="card bg-danger">
	      <div class="card-body text-center">
	      	<h2><p class="card-text">Rejected</p></h2>
	         <?php 
	            $query5 = "SELECT status FROM cartform WHERE status = 3";
	            $sql2 = mysqli_query($conn,$query5);

	            if ($rejected_total = mysqli_num_rows($sql2)){
	                echo '<h3>'.$rejected_total.'</h3>';
	            }
	            else
	            {
	              echo '<h3>'.'0'.'</h3>';
	            }
	        ?>
	        <button type="button" style="background: #dc3545; border: none;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal" data-bs-whatever="@getbootstrap" >View Details</button>
	      </div>
	    </div>  
	  </div>
	</div>
	

	<h1><center>RESERVATION DETAILS</center></h1>

				<!-- Modal -->
				<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="staticBackdropLabel">Pendings</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<div class="container2">
							<table  id="customer-table" class="table table-responsive table-hover table-bordered table-dark">
								<thead>
									<th> id</th>
									<th>User Id</th>
									<th>Names</th>
									<th>Address</th>
									<th>Contact</th>
									<th>Pax</th>
									<th>Date</th>
									<th>Time</th>
									<th>Status</th>
									<th>Action</th>
								</thead>
								<tbody>


								<?php
								 require 'connection.php';
							      $rows = mysqli_query($conn, "SELECT * FROM cartform WHERE status = 1");
							      $i = 1;
							      ?>
							      <?php foreach($rows as $row) : ?>
							      <tr id = <?php echo $row["cartID"]; ?>>
								        <td><?php echo $i++; ?></td>
								        <td><?php echo $row["logID"]; ?> </td>
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
								        	<select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['cartID']?>')">
								        		<option value = 1>Pending</option>
								        		<option value = 2>Accept</option>
								        		<option value = 3>Rejected</option>
								        	</select>
								        	
								        </td>
									</tr>		
									<?php endforeach; ?>
								</tbody>

							</table>



							<?php require 'script.php'; ?>	
						</div>
				      </div>
				    </div>
				  </div>
				</div>


				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Accepted</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <div class="container2">
							<table  id="customer-table" class="table table-responsive table-hover table-bordered table-dark">
								<thead>
									<th> id</th>
									<th>User Id</th>
									<th>Names</th>
									<th>Address</th>
									<th>Contact</th>
									<th>Pax</th>
									<th>Date</th>
									<th>Time</th>
									<th>Status</th>
									<th>Action</th>
								</thead>
								<tbody>


								<?php
								 require 'connection.php';
							      $rows = mysqli_query($conn, "SELECT * FROM cartform WHERE status = 2");
							      $i = 1;
							      ?>
							      <?php foreach($rows as $row) : ?>
							      <tr id = <?php echo $row["cartID"]; ?>>
								        <td><?php echo $i++; ?></td>
								        <td><?php echo $row["logID"]; ?> </td>
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
								        	<select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['cartID']?>')">
								        		<option value = 1>Pending</option>
								        		<option value = 2>Accept</option>
								        		<option value = 3>Rejected</option>
								        	</select>
								        	
								        </td>
									</tr>		
									<?php endforeach; ?>
								</tbody>

							</table>



							<?php require 'script.php'; ?>	
						</div>
				      </div>
				    </div>
				  </div>
				</div>
				    </div>
				  </div>
				</div>


				

				<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Rejected</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body"><div class="container2">
										<table  id="customer-table" class="table table-responsive table-hover table-bordered table-dark">
											<thead>
												<th> id</th>
												<th>User Id</th>
												<th>Names</th>
												<th>Address</th>
												<th>Contact</th>
												<th>Pax</th>
												<th>Date</th>
												<th>Time</th>
												<th>Status</th>
												<th>Action</th>
											</thead>
											<tbody>


											<?php
											 require 'connection.php';
										      $rows = mysqli_query($conn, "SELECT * FROM cartform WHERE status = 3");
										      $i = 1;
										      ?>
										      <?php foreach($rows as $row) : ?>
										      <tr id = <?php echo $row["cartID"]; ?>>
											        <td><?php echo $i++; ?></td>
											        <td><?php echo $row["logID"]; ?> </td>
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
											        	<select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['cartID']?>')">
											        		<option value = 1>Pending</option>
											        		<option value = 2>Accept</option>
											        		<option value = 3>Rejected</option>
											        	</select>
											        	
											        </td>
												</tr>		
												<?php endforeach; ?>
											</tbody>

										</table>



										<?php require 'script.php'; ?>	
									</div>
							      </div>
							    </div>
							  </div>
							</div>
				      </div>
				    </div>
				  </div>
				</div>

	<div class="container2">
		<table  id="customer-table" class="table table-responsive table-hover table-bordered table-dark">
			<thead>
				<th> id</th>
				<th>User Id</th>
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
		      $rows = mysqli_query($conn, "SELECT * FROM cartform ORDER BY status ASC");
		      $i = 1;
		      ?>
		      <?php foreach($rows as $row) : ?>
		      <tr id = <?php echo $row["cartID"]; ?>>
			        <td><?php echo $i++; ?></td>
			        <td><?php echo $row["logID"]; ?> </td>
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
			          <button type="button" onclick = "submitData(<?php echo $row['cartID']; ?>);">Delete</button>
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
			let url = "https://localhost/Website/fetch_data.php";
			window.location.href= url+"?cartID="+cartID+"&status="+value;
		}
		
	</script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
	


</html>