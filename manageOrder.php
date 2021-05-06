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

<body>
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
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-createOrder" role="tab" aria-controls="nav-home" aria-selected="true">create</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-profile" aria-selected="false">delivery</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-receive" role="tab" aria-controls="nav-contact" aria-selected="false">receive</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-createOrder" role="tabpanel" aria-labelledby="nav-home-tab">
            <form method="post" action="" id="createOrder">
                <h1>Create Order</h1>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-delivery" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form method="post" action="" id="deliveryOrder">
                <h1>Delivery</h1>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-receive" role="tabpanel" aria-labelledby="nav-contact-tab">
        <h1>Receive</h1>
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
      h1 {
        text-align: center;
    }
</style>