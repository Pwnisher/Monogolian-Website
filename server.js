function getEmprecord()
{
  $.ajax ({
    url: 'getattendance.php',
    method: "GET",
    data: {},
    dataType: "json",
    success: function(response) {
      $('#customer-table tbody').empty();

      $.each(response, function(key, value){
       
       var newRow = '<tr>' +
          '<td>' + cartID + '</td>' +
          '<td>' + name + '</td>' +
          '<td>' + address + '</td>' +
          '<td>' + cont + '</td>' +
          '<td>' + pax + '</td>' +
          '<td>' + date + '</td>' +
          '<td>' + time + '</td>' +
        '</tr>';
  
        var tableBody = $('#customer-table tbody');
        tableBody.append(newRow);

      });
    }
  });
}

