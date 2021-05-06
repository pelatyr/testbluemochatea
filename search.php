<?php 
include_once('connect.php');
  if(isset($_POST['search'])){
    $name = $_POST['inputname'];
    
    $sql = "SELECT * FROM product WHERE Product_Name = '$name'";

    $query = mysqli_query($conn,$sql);
	
}
