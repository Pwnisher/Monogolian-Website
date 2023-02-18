
<?php
include 'connection.php';
?>


<table id="customer-table" class="table table-responsive table-hover table-bordered table-dark">
			<thead>
				<th>reservation id</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Delete</th>
			</thead>
			<tbody>


			<?php
			 require 'connection.php';
		      $rows = mysqli_query($conn, "SELECT * FROM cartform");
		      $i = 1;
		      ?>
		      <?php foreach($rows as $row) : ?>
		      <tr id = <?php echo $row["cartID"]; ?>>
			        <td><?php echo $i++; ?></td>
			        <td><?php echo $row["name"]; ?></td>
			        <td><?php echo $row["email"]; ?></td>
			        <td><?php echo $row["cont"]; ?></td>
			        <td>
			          <button type="button" onclick = "submitData(<?php echo $row['cartID']; ?>);">Delete</button>
			        </td>
				</tr>		
				<?php endforeach; ?>
			</tbody>

		</table>
		<?php require 'script.php'; ?>	