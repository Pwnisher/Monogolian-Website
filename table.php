<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">RESERVATION DETAILS</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        
	<div class="container3">
		<table id="customer-table" class="table table-responsive table-hover table-bordered table-dark" >
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
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>