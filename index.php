<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="theme.css" rel="stylesheet">
<script src="search.js"></script>
<script src="jquery-3.3.1.min.js"></script>
  <script>
var index, table = document.getElementById('myTable');
for(var i=0;i<table.rows.length;i++)
{

	table.rows[i].cells[0].onclick = function()
	{
		index=this.parentElement.rowIndex;
		table.deleteRow(index);
		console.log(index);
	};

}
</script>
<script>
  $(document).ready(function(){
   
  });
</script>
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
  <tr>
  <td colspan="3" style="text-align:center;color:white;background-color:orange"><?php echo $count." guest in the list!"; ?></td>
  </tr>
</table>
</div>
</body>
</html>
