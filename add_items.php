<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>Dashboard</title>
<style type="text/css">
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
}
h2{
    text-align: center;
    font-size: 22px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: red;
    padding: 30px 0;
    font-family: Sans-serif;
    
}
  
    .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
       
         
         form{width:100%;
     }
     .head{
  font-size: 30px;
font-weight: bold;
   color: black;
   align-items: center;
}
</style>
  
</head>
<body style="background-image: url(home.jpg);">


<div class="topnav">
  <a class="active" href="#home">Add Products</a>
  <a href="Show.php">view Products</a>
  <a style="float:right" class="active1" href="login/index.php">Login</a>

</div>

  
   
   
<form method="POST" action="backend.php" >
    <center>
   <h2 class="head">Add Products</h2>
   <input type="hidden" value=0 id="index" name="index"/>
 
  <table class="table table-bordered">
  <thead>
        <tr>
            <th>#</th>
      <th>Product Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Status</th>
      <th>Image</th>
      <th>Weight</th>
      <th>Delete</th>
      
        </tr>
    <thead>
        <tbody id="tbody"></tbody>
    
    </table>


    <center>
        <br>
<button type="button"  class="btn btn-light"  onclick="addItem()"><b>Add Items</b></button> 
 <button type="Submit"    class="btn btn-light" style="background: lightgrey;" name="Submit" value="Submit"><b>Submit</b></button> </center>
</form>    
</form>

<script>
    var items = 0;
    function addItem() {
       
    let inc = document.getElementById("index");
    
    
    
    
    inc.value = parseInt(inc.value) + 1;
    
    
    console.log(inc.value);
     
 
        var html = "<tr>";
            html += "<td>" + items + "</td>";
            html += "<td><input type='text' name='name" + items + "'></td>";
      html += "<td><input type='text' name='Description" + items + "'></td>";
      html += "<td><input type='number' name='Price" + items + "'></td>";
           
      html += "<td><input type='text' name='Status" + items + "'></td>";
      html += "<td><input type='file' name='Image" + items + "'></td>";
      html += "<td><input type='number' name='Weight" + items + "'></td>";
      
      html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
        html += "</tr>";
 
        var row = document.getElementById("tbody").insertRow();
        row.innerHTML = html;
     items++;
    }
 
function deleteRow(button) {
    
    let inc = document.getElementById("index");
    
    inc.value = parseInt(inc.value) - 1;
   
    
    console.log(inc.value);
    button.parentElement.parentElement.remove();
    
}
</script>
</center>

</body>
</html>