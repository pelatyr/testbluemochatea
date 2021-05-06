<?php
//ADD Product Page Product.php
include_once('connect.php');
if (isset($_POST['addProduct'])) {
    
    // รับค่าที่ Add เข้ามา
    $productName = $_POST['productName'];
    $productSize = $_POST['productSize'];
    $productPrice = $_POST['productPrice'];
    $product6kg = $_POST['product6kg'];
    $product26kg = $_POST['product26kg'];
    $product51kg = $_POST['product51kg'];
    $product201kg = $_POST['product201kg'];
    $productQuantity = $_POST['productQuantity'];

    //Query ข้อมูล
    $sql = "INSERT INTO product ( Product_Name, Size, Price, 6kg, 26kg, 51kg, 201kg, Mix_Quantity )
                    VALUES('" . $_POST['productName'] . "',
                            '" . $_POST['productSize'] . "',
                            '" . $_POST['productPrice'] . "',
                            '" . $_POST['product6kg'] . "',
                            '" . $_POST['product26kg'] . "',
                            '" . $_POST['product51kg'] . "',
                            '" . $_POST['product201kg'] . "',
                            '" . $_POST['productQuantity'] . "') ";

   
    if ($conn->query($sql)) {
        echo "<script>alert('Add new Product  Successfully');window.history.back();</script>";
    } else
        echo "Error: " . $sql . "<br>" . $conn->error;
}
