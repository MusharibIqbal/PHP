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
<div class="container col-md-5">
    <table class="table">
        <th>Name</th>
        <th>Brand</th>
        <th>Quantity</th>
        <th>Manufacturing</th>
        <th>Expiry</th>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                        <?php
                        echo $row['Name'];
                        ?>
                </td>
                <td>
                        <?php
                        echo $row['Brand'];
                        ?>
                </td>
                <td>
                        <?php
                        echo $row['Quantity'];
                        ?>
                </td>
                <td>
                        <?php
                        echo $row['MDate'];
                        ?>
                </td>
                <td>
                        <?php
                        echo $row['EDate'];
                        ?>
                </td>
                
          
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>

