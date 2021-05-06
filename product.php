<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Manage Order</title>

</head>
<?php include_once('connect.php') ?>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bluemochatea</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="product.php">Product <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="order.php">Order</a>
                <a class="nav-item nav-link" href="manageOrder.php">Manage order</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <h1>Product</h1>
        <!-- <div class="row justify-content-center">
            <div class="input-group col-md-3">
                <input type="search" class="form-control " name="inputname" id="id_search" placeholder="ProductName">
                <div class="input-group-append">
                    <button type="submit" class="btn" id=btn-search name="search">SEARCH</button>
                </div>
            </div>
        </div> -->

        <!-- button newproduct -->
        <!-- Button trigger modal -->
        <div class="btn">
            <button type="button" class="btn btn-success justif" data-toggle="modal" data-target="#createProduct"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>New Product
            </button>
        </div>


        <!-- tabel -->
        <div class="row tabel">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>size</th>
                        <th>price</th>
                        <th>6kg</th>
                        <th>26kg</th>
                        <th>51kg</th>
                        <th>201kg</th>
                        <th>Quantity</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT
                            * 
                        FROM
                            product";
                $resultProduct = $conn->query($sql);
                while ($row = $resultProduct->fetch_assoc()) {
                ?>
                    <tbody>
                        <td class="productId"><?php echo $row['id'] ?></td>
                        <td class="productName"><?php echo $row['Product_Name']; ?></td>
                        <td class="productSize"><?php echo $row['Size']; ?></td>
                        <td class="productPrice"><?php echo $row['Price']; ?></td>
                        <td class="product6kg"><?php echo $row['6kg']; ?></td>
                        <td class="product26kg"><?php echo $row['26kg']; ?></td>
                        <td class="product51kg"><?php echo $row['51kg']; ?></td>
                        <td class="product201kg"><?php echo $row['201kg']; ?></td>
                        <td class="productQuantity"><?php echo $row['Mix_Quantity']; ?></td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalEditProduct">edit</button></td>
                        <td><button type="button" class="btn btn-danger">delete</button></td>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>

    <!-- modal addnewproduct -->
    <div class="modal" id="createProduct">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="addNewProduct.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label required">Name Product</label>
                            <input type="text" class="form-control" name="productName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">size</label>
                            <input type="text" class="form-control" name="productSize">
                            <label class="form-label required">price</label>
                            <input type="text" class="form-control" name="productPrice">
                            <label class="form-label required">6kg</label>
                            <input type="text" class="form-control" name="product6kg">
                            <label class="form-label required">26kg</label>
                            <input type="text" class="form-control" name="product26kg">
                            <label class="form-label required">51kg</label>
                            <input type="text" class="form-control" name="product51kg">
                            <label class="form-label required">201kg</label>
                            <input type="text" class="form-control" name="product201kg">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Quantity</label>
                            <input type="number" class="form-control" name="productQuantity">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addProduct">addProduct</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal update -->
    <div class="modal" id="ModalEditProduct<?php echo $fetch['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">update Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="addNewProduct.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo $fetch['id'] ?>" />
                            <label class="form-label required">Name Product</label>
                            <input type="text" class="form-control" name="productName" value="<?php echo $fetch['Product_Name'] ?>" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">size</label>
                            <input type="text" class="form-control" name="productSize" value="<?php echo $fetch['Size'] ?>" >
                            <label class="form-label required">price</label>
                            <input type="text" class="form-control" name="productPrice" value="<?php echo $fetch['Price'] ?>" >
                            <label class="form-label required">6kg</label>
                            <input type="text" class="form-control" name="product6kg" value="<?php echo $fetch['6kg'] ?>" >
                            <label class="form-label required">26kg</label>
                            <input type="text" class="form-control" name="product26kg" value="<?php echo $fetch['26kg'] ?>" >
                            <label class="form-label required">51kg</label>
                            <input type="text" class="form-control" name="product51kg" value="<?php echo $fetch['51kg'] ?>" >
                            <label class="form-label required">201kg</label>
                            <input type="text" class="form-control" name="product201kg" value="<?php echo $fetch['201kg'] ?>" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Quantity</label>
                            <input type="number" class="form-control" name="productQuantity" value="<?php echo $fetch['Mix_Quantity'] ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addProduct">addProduct</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<style>
    .modal-header {
        background: #F7941E;
        color: #fff;
    }

    .required:after {
        content: "*";
        color: red;
    }

    h1 {
        text-align: center;
    }

    .btn-success {
        margin-bottom: 10px;
     
    }
  
</style>