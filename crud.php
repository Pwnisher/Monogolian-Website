<!DOCTYPE html>
<html>
<head>
	<title>My CRUD web page</title>

	<!-- External CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


	<link rel ="stylesheet" href="crud.css">
	
	<!-- Internal CSS -->
	<style>
		#btnAdd {
			color:red
		}
	</style>
	
	
</head>
<body>

	<header class="p-3 bg-dark text-white">
		<div class="container">
		  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
			  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
			</a>

			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
			  <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
			  <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
			  <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
			  <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
			  <li><a href="#" class="nav-link px-2 text-white">About</a></li>
			</ul>

			<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
			  <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
			</form>

			<div class="text-end">
			  <button type="button" class="btn btn-outline-light me-2">Login</button>
			  <button type="button" class="btn btn-warning">Sign-up</button>
			</div>
		  </div>
		</div>
	</header>
	
	<br><br>

	<h1><center>CRUD: create an implementation of Edit and Delete button</center></h1>
	
	<div class="container">
		<button id="btnAdd" style="margin-bottom: 10px;color:white;"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
		<table id="school-table" class="table table-responsive table-hover table-bordered table-dark">
			<thead>
				<th>School Name</th>
				<th>Email</th>
				<th>No. of Participants</th>
				<th>Training course</th>
				<th>Remarks</th>
				<th>Select</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<tr>
					<td>Jose Rizal University</td>
					<td>jru@gmail.com</td>
					<td>50</td>
					<td>Web App Development</td>
					<td>test</td>
					<td><button class="btn btn-info" value="Edit" onClick = "EditRow(this)">Edit</button></td>
					<td><button class="btn btn-danger" value = "Delete" onClick = "deleteRow(this)">Delete</button></td>
				</tr>	

						
			</tbody>			
		</table>	
	</div>

   <!--Modal1-->
	<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="mb-3">
				<label for="school-name" class="col-form-label">School Name:</label>
				<input type="text" class="form-control" id="add-school-name">
			  </div>
			  <div class="mb-3">
				<label for="school-email" class="col-form-label">School Email:</label>
				<input type="text" class="form-control" id="add-school-email">
			  </div>
			  <div class="mb-3">
				<label for="num-participants" class="col-form-label">No. of Participants:</label>
				<input type="text" class="form-control" id="add-num-participants">
			  </div>
			  <div class="mb-3">
				<label for="training-course" class="col-form-label">Training Course:</label>
				<select class="form-select" id="add-training-course">
					<option value="1">Web Development Level 2</option>
					<option value="2">Programing (JAVA) NC III</option>
					<option value="3">Programing (.NET) NC III</option>
					<option value="4">Game Programing NC III</option>
					<option value="5">Programing (Oracle) NC III</option>
				</select>
				
			  </div>
			  <div class="mb-3">
				<label for="remarks" class="col-form-label">Remarks:</label>
				<textarea class="form-control" id="add-remarks"></textarea>
			  </div>
			</form>
		  </div>

		  <div class="modal-footer">
			<button type="button" style="background:red; color: white;" id="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" id="save" class="btn btn-primary" onClick="addRow();">Save</button>
		  </div>
		</div>
	  </div>
	</div>


	<!--MODAL2-->
	<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="mb-3">
				<label for="school-name" class="col-form-label">School Name:</label>
				<input type="text" class="form-control" id="edit-school-name">
			  </div>
			  <div class="mb-3">
				<label for="school-email" class="col-form-label">School Email:</label>
				<input type="text" class="form-control" id="edit-school-email">
			  </div>
			  <div class="mb-3">
				<label for="num-participants" class="col-form-label">No. of Participants:</label>
				<input type="text" class="form-control" id="edit-num-participants">
			  </div>
			  <div class="mb-3">
				<label for="training-course" class="col-form-label">Training Course:</label>
				<select class="form-select" id="edit-training-course">
					<option value="1">Web Development Level 2</option>
					<option value="2">Programing (JAVA) NC III</option>
					<option value="3">Programing (.NET) NC III</option>
					<option value="4">Game Programing NC III</option>
					<option value="5">Programing (Oracle) NC III</option>
				</select>
				
			  </div>
			  <div class="mb-3">
				<label for="remarks" class="col-form-label">Remarks:</label>
				<textarea class="form-control" id="edit-remarks"></textarea>
			  </div>
			</form>
		  </div>

		  <div class="modal-footer">
			<button type="button" style="background:red; color: white;" id="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" id="save" class="btn btn-primary" onClick="productUpdateInTable(this);" data-bs-dismiss="modal">Save</button>
		  </div>
		</div>
	  </div>
	</div>
	
	
	
	<footer id = "m_footer2" >
		<center><p> Copyright &copy; 2022 Posediocodes.com</p></center>	
	</footer>


	
	
</body>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	<script src="js/crud.js"></script>

	<!-- Internal JavaScript -->
	<script>
		
		function showAlert()
		{
			alert("My first javascript!");
		}
		
	</script>


</html>