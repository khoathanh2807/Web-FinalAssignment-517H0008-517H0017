<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ktstore_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productname = $_POST["productname"];
$price = $_POST["price"];
$discription = $_POST["discription"];
$sql = "INSERT INTO products (productname, price, discription) VALUES ('$productname',  '$price', '$discription')";
echo $sql;
$stmt = $conn->query($sql);
//$conn->close();

$conn->close();
header("Location: sellusedproduct.php");
?>