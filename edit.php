<?php 
$conn=mysqli_connect('localhost','root','','hello');

$id=$_REQUEST['edit'];

$sql="SELECT * FROM users WHERE ID='$id'";
    $result=mysqli_query($conn,$sql);
    
    $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit</title>
</head>
<body>
<h2>Editing Form</h2>

<form action="edit_db.php" method="post">
  <label for="fname">ID:-<?php echo $row['ID'];?> </label><br>
  <label for="fname">Name</label><br>
  <input type="text" id="name" name="username" value="<?php echo $row['username'];?>"><br>
  
  <label for="lname">email</label><br>
  <input type="text" id="email" name="email" value="<?php echo $row['email'];?>"><br><br>



  <button type="submit" name="save" value="<?php echo $row['id'];?>">Save</button>

</form> 
</body>
</html>