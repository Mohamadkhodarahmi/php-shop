<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$sb_host = "localhost";
$db_username = "mamad";
$db_password = "138055@mM";
$db_name = "shop";

$connection = mysqli_connect($sb_host, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die("connection failed" . $connection->connect_error);
}

$sql = "SELECT * FROM products LEFT JOIN XX_SAMPLE ON products.productname = XX_SAMPLE.name";
$result = $connection->query($sql);






//foreach ($result->fetch_all(1) as $row){
//        echo "<br> productname: " . $row["productname"] . "price :" . $row["price"] . "description :" . $row["descpription"] . "<br>";
//}

//if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//        echo "<br> productname: " . $row["productname"] . "price :" . $row["price"] . "description :" . $row["descpription"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}


