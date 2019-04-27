
<?php

include_once ("navigation.html");
require_once("config.php");

echo "Product Details:";
echo "<br>";
$sid = $_GET['id'];

$connection =  mysqli_connect(DBHOST, DBUSER, DBPASSWORD , DBNAME);

if(mysqli_connect_error()) {
    die(mysqli_connect_error());
} else {
    echo "Connected Successfully!<br>";
}

$sql = "SELECT * FROM productmanagement WHERE id = $sid";

$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row['Name'] . ", Brand: " . $row['Brand'] . ", Quantity: " . $row['Quantity']. ", Expiry Date: " . $row['EDate']. ", Manufacturing Date: " . $row['MDate'];
    echo "<br></a>";
}

?>