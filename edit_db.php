<?php 
$conn=mysqli_connect('localhost','root','','hello');
$id=$_REQUEST['save'];

$name=$_POST["username"];
		   
		   $email=$_POST["email"];
		   

$query = "UPDATE  users SET username='$username' WHERE ID='$id'";
           mysqli_query($conn, $query);

        

if($query==True) 
{
echo "upadated successfully"
}else{
	echo "Someting Went Wrong!!";
}   

?>