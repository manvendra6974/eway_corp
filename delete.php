<?php 
$conn=mysqli_connect('localhost','root','','eway');

$id=$_REQUEST['delete'];

$sql="DELETE FROM product Where ID='$id'";
  	$result=mysqli_query($conn,$sql);

header('Location:Show.php');
?>