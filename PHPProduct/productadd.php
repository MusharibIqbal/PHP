<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
<form action="productaddaction.php" method="post">
        <input type="hidden" name="id" >
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" >
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" placeholder="Brand Name">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity">
        </div>
        <div class="form-group">
            <label for="edate">Manufacturing Date</label>
            <input type="Date" name="mdate" class="form-control" id="mdate" placeholder="Enter ManufacturingDate">
        </div>
        <div class="form-group">
            <label for="edate">Expiry Date</label>
            <input type="Date" name="edate" class="form-control" id="edate" placeholder="Enter ExpiryDate" >
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>