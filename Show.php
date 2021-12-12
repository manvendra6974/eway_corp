<?php
session_start();
$conn=mysqli_connect('localhost','root','','eway');

if(isset($_POST['save'])){
  $checkbox = $_POST['check'];
  for($a=0;$a<count($checkbox);$a++){
  $del_id = $checkbox[$a]; 
  mysqli_query($conn,"DELETE FROM product WHERE ID='".$del_id."'");
  $message = "Data deleted successfully !";
}
}
$result = mysqli_query($conn,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="navbar.css">

<title>Delete Product</title>

<style type="text/css">
table, td, th {
  border: 1px solid black;
}
th{
  background-color:  #a6a6a6 ;
}
table{
  border-collapse: collapse;
}

.tableshow{
   margin-left: auto;
  margin-right: auto;
}
    .button {
  background-color: #4CAF50; 
 
  color: white;
  padding: 5px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
h1{
  text-align: center;
  font-family: Sans-serif;
  color: #333399;
}

</style>



</head>
<body style="background-image: url(home.jpg);">
  <div class="topnav">
  <a class="active" href="add_items.php">Add Products</a>
  <a href="Show.php">View Products</a>
</div>

  <h1> All added Products </h1>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<form method="post" action="">
<table border="1" class="tableshow">
<thead>
<tr>
    <th><input type="checkbox" id="checkAl"> Select All</th>
  
    <th>ID</th>
    <th>Name</th> 
    <th>Description</th>
    <th>Price</th>
    <th>Status</th>
    <th>Image</th>
    <th>Weight</th>

   <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>
<?php
$a=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
  <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"></td>
  <td><?php echo $row["id"]; ?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["Description"]; ?></td>
  <td><?php echo $row["Price"]; ?></td>
  <td><?php echo $row["Status"]; ?></td>
  <td><?php echo $row["Image"]; ?></td>
  <td><?php echo $row["Weight"]; ?></td>
  <td><form method="post" action="edit.php"><button type="submit" name="edit" value="<?php echo $row['id'];?>">Edit</button></form></font></td> 
    <td><form method="post" action="delete.php"><button type="submit" name="delete" value="<?php echo $row['id'];?>">Delete</button></form></td></form>
</tr>
<?php
$a++;
}
?>
</table>
<p align="center"><button type="submit" class="button" name="save">DELETE</button></p>
</form>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</body>
</html>


