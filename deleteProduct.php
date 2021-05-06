<?php
//ADD Product Page Product.php
include_once('connect.php');
if (isset($_POST['addProduct'])) {
    
    // รับค่าที่ Add เข้ามา
    $productId = $_POST['id'];

    //Query ข้อมูล
    $sql = "DELETE FROM product 
                    WHERE id = '$productId'";

    if ($conn->query($sql)) {
        echo "<script>alert('delete Product  Successfully');window.history.back();</script>";
    } else
        echo "Error: " . $sql . "<br>" . $conn->error;
}
