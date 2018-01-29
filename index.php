<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="theme.css" rel="stylesheet">
<script src="search.js"></script>
<script src="jquery-3.3.1.min.js"></script>
</head>
<body>

<h2 style="color:orange">Event List</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<div class="scroll">
<table id="myTable" style="width:100%;">
  <tr class="header" style="background-color: orange">
    <th style="color:white">Name</th>
    <th style="color:white">Lastname</th>
    <th style="color:white">Checked in</th>
  </tr>
  <?php
  require_once "list.php";
  ?>
  
</table>
</div>
<div class="count" style="background-color:orange; color: white;padding: 15px 32px;text-align: center;font-size: 16px;width:1100px">
  <?php echo $count." guest in the list!"; ?>
</div>
  
  
   <!--Pagination-->
    
     
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"> </script>
  <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
    <script type="text/javascript">
             $(document).ready(function () {
                 $('#hosts').dataTable();
             });
 
</script>
<script>
$(document).ready(function(){

 // Check 
 $('.delete').click(function(){
  var el = this;
  var id = this.id;
  var splitid = id.split("_");

  
  var deleteid = splitid[1];
 
  // AJAX Request
  $.ajax({
   url: 'checkin.php',
   type: 'POST',
   data: { id:deleteid },
   success: function(response){

    // Removing row from HTML Table
    $(el).closest('tr').css('background','#ADED8C');
    $(el).closest('tr').fadeOut(800, function(){ 
     $(this).remove();
    });

   }

  });

 });

});
</script>
</body>
</html>
