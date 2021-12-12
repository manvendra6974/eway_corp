<?php
 Session_Start();
  $conn=mysqli_connect('localhost','root','','eway');
    
        
	     for ($a = 0; $a < $_POST["index"]; $a++)
        {
         $name=$_POST["name".$a];
		   $Description=$_POST["Description".$a];
		   $Price=$_POST["Price".$a];
		   $Status=$_POST["Status".$a];
		   $Image=$_POST["Image".$a];
         $Weight=$_POST["Weight".$a];


$query = "INSERT INTO product (name,Description,Price,Status,Image,Weight) VALUES ('$name','$Description','$Price','$Status','$Image','$Weight')";
           mysqli_query($conn, $query);
        }
 
 if($query==True)
 {
echo "Succesfully Done";
 }else{
 	echo "Something Went Wrong!!";
        
 
    }
 
 
 
?>
