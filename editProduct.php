<?php
//ADD Product Page Product.php
include_once('connect.php');

// รับค่าที่ Add เข้ามา
$id = $_GET['ID'];
$query = "SELECT * FROM product WHERE id= $id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    $productName = $row['productName'];
    $productSize = $row['productSize'];
    $productPrice = $row['productPrice'];
    $product6kg = $row['product6kg'];
    $product26kg = $row['product26kg'];
    $product51kg = $row['product51kg'];
    $product201kg = $row['product201kg'];
    $productQuantity = $row['productQuantity'];
}

//    $set = " set
//     Size = '".$_POST['productSize']."';
//     Price = '".$_POST['productPrice']."';
//     6kg = '".$_POST['product6kg']."';
//     26kg = '".$_POST['product26kg']."';
//     51kg = '".$_POST['product51kg']."';
//     201kg = '".$_POST['product201kg']."';
//     Mix_Quantity = '".$_POST['productQuantity']."' ";

//     //Query ข้อมูล
//     $sql = "UPDATE product $set WHERE id = ".$_POST['productId']." ";


//     if ($conn->query($sql)) {
//         echo "<script>alert('update new Product  Successfully');window.history.back();</script>";
//     } else
//         echo "Error: " . $sql . "<br>" . $conn->error;

?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Bootstrap 5 Modal</title>
    <style>
        .modal-header {
            background: #F7941E;
            color: #fff;
        }

        .required:after {
            content: "*";
            color: red;
        }
    </style>
</head>

<body>
    <!-- <div class="container mt-5">
        <div class="modal" id="ModalEditProduct">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="updateProductZ" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label required">Edit Product</label>
                                <input type="text" class="form-control" name="productName" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">size</label>
                                <input type="text" class="form-control" name="productSize" value="">
                                <label class="form-label required">price</label>
                                <input type="text" class="form-control" name="productPrice" value="">
                                <label class="form-label required">6kg</label>
                                <input type="text" class="form-control" name="product6kg" value="">
                                <label class="form-label required">26kg</label>
                                <input type="text" class="form-control" name="product26kg" value="" ;>
                                <label class="form-label required">51kg</label>
                                <input type="text" class="form-control" name="product51kg" value="" ;>
                                <label class="form-label required">201kg</label>
                                <input type="text" class="form-control" name="product201kg" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Quantity</label>
                                <input type="number" class="form-control" name="productQuantity" value="">
                            </div>


                            <div class="modal-footer">
                                <input type="submit" name="Submit" value="Submit">
                                <input type="submit" class="btn btn-primary" name="editProduct">updateProduct</input>
                                <input type="hidden" name="idd" value="<?php echo "$id" ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </div> -->
</body>

</html>