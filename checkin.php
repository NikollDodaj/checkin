<?php
//Connect to database
require_once "connect.php";


//Get the name to be checkin
$id=$_POST['id'];

//Update checkin status
$query="UPDATE list SET checked=1 WHERE id= '".$id."'";

$result=$db->query($query);

if(!$result){
	echo "Query not correct";
	exit;
}

$db->close();
?>


