
var rows = null;


function addRow()
{

	var firstName = $('.fnInput').val();
	var secondName = $('.lnInput').val();
	var contact = $('.conInput').val();
	var email = $('.emInput').val();
	
	/*
	var newRow = '<tr>' +
					'<td>' + schoolName + '</td>' +
					'<td>' + schoolEmail + '</td>' +
					'<td>' + numParticipants + '</td>' +
					'<td>' + trainingCourse + '</td>' +
					'<td>' + remarks + '</td>' +
					'<td><button class="btn btn-info" value = "Edit" onClick = "EditRow(this)">Edit</button></td>' +
					'<td><button class="btn btn-danger value = "Delete" onClick = "deleteRow(this)">Delete</button></td>' +
				'</tr>';
	
	var tableBody = $('#school-table tbody');
	tableBody.append(newRow);
	*/
	insertSchool(firstName, secondName, contact,email);

	clearAll();
	
	
}

function addNewRowHTML(logID, firstName, secondName, contact, email ){
	var newRow = '<tr>' +
					'<td>' + logID + '</td>' +
					'<td>' + firstName + '</td>' +
					'<td>' + secondName + '</td>' +
					'<td>' + contact + '</td>' +
					'<td>' + email + '</td>' +
					'<td><button class="btn btn-danger value = "Delete" onClick = "deleteRow(this)">Delete</button></td>' +
				'</tr>';
	
	var tableBody = $('#school-table tbody');
	tableBody.append(newRow);

}

function getSchools(){
	$.ajax({
		url: './api/getSchools.php', 
		method: "GET",
		data: {},
		dataType: "json",
		success: function(response){

			$('#school-table tbody').empty();

			$.each(response, function(key, value){

				addNewRowHTML(
							  value.fname, 
							  value.lname, 
							  value.contact, 
							  value.email);

			});
		}


	});
}


function insertSchool(logID, firstName, secondName,contact,email){
	$.ajax({
		url: './api/insertSchool.php', 
		method: "POST",
		data: {
			"fname" : fname,
			"lname" : lname,
			"contact" : contact,
			"email" : email
		},
		dataType: "json",
		success: function(ID){

				if(ID !== 0){

						addNewRowHTML(fname, 
							  lname, 
							  contact, 
							  email);
				}
				else{
					alert("Insert Failed : Something Went Wrong");
				}
		}

	});
}

$(function(){
console.log("Ready");
getSchools();
});