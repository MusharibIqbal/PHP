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
    <?php
    require_once("config.php");
    $sid = $name = $regno = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!isset($_GET['id'])) {
            echo "id is not set";
            return;
        } else if (empty($_GET['id'])) {
            echo "id is empty";
            return;
        } else {
            $sid = $_GET['id'];
            $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
            if (mysqli_connect_error()) {
                die(mysqli_connect_error());
            }

            $sql = "SELECT * FROM productmanagement WHERE id = $sid";

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            $name = $row['Name'];
            $brand = $row['Brand'];
            $quantity = $row['Quantity'];
            $mdate = $row['MDate'];
            $edate = $row['EDate'];

            if (mysqli_error($connection)) {
                die("Something went wrong! Check your Database");
            }
            mysqli_close($connection);
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['name']) && isset($_POST['brand']) && isset($_POST['quantity'])&& isset($_POST['mdate'])&& isset($_POST['edate'])) {
            $name = $_POST['name'];
            $brand = $_POST['brand'];
            $quantity = $_POST['quantity'];
            $mdate = $_POST['mdate'];
            $edate = $_POST['edate'];
            $sid = $_POST['id'];
            $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);
            if (mysqli_connect_error()) {
                die(mysqli_connect_error());
            }
            //echo $name . " is ready to update! with id: " . $sid;
            $sql = "UPDATE productmanagement SET Name = '$name', Brand = '$brand' , Quantity = '$quantity', EDate = '$edate', MDate = '$mdate' WHERE id = $sid";
            mysqli_query($connection, $sql);
            if(mysqli_error($connection)) {
                die("Something went wrong! Check your Database");
            }
            echo "Product record updated successfully!";
            mysqli_close($connection);
        }
    }

    ?>
</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$sid?>">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="<?=$name?>">
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="regno" placeholder="Brand Name" value="<?=$brand?>">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity" value="<?=$quantity?>">
        </div>
        <div class="form-group">
            <label for="edate">Manufacturing Date</label>
            <input type="Date" name="mdate" class="form-control" id="mdate" placeholder="Enter ManufacturingDate" value="<?=$mdate?>">
        </div>
        <div class="form-group">
            <label for="edate">Expiry Date</label>
            <input type="Date" name="edate" class="form-control" id="edate" placeholder="Enter ExpiryDate" value="<?=$edate?>">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>