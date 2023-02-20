<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        cartID: $("#cartID").val(),
        logID: $("#logID").val(),
        name: $("#name").val(),
        address: $("#address").val(),
        contact: $("#contact").val(),
        pax: $("#pax").val(),
        date: $("#date").val(),
        time: $("#time").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>
