<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM productmanagement";

    $result = mysqli_query($connection, $sql);

    ?>

</head>
<body>
<?php
include_once ("navigation.html");
?>
<div class="container col-md-5">
    <table class="table">
        <th>Name</th>
        <th>Actions</th>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <a href="productdetails.php?id=<?= $row['id'] ?>">
                        <?php
                        echo $row['Name'];
                        ?>
                    </a>
                </td>
                <td>
                    <a href="productedit.php?id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                    <a href="productdelete.php?id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-primary">Delete</button>
                    </a>
                    <a href="productdescription.php?id=<?= $row['id'] ?>">
                        <button type="button" class="btn btn-primary">View</button>
                    </a>
                </td>
          
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>

