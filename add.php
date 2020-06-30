<?php
require_once("connect_db.php");

$fileName = basename($_FILES["uploadfile"]["name"]);
$targetDir = "images/" . $fileName;

$productname = $_POST["productname"];
$price = $_POST["price"];
$description = $_POST["description"];

//if (isset($_POST["submit"]) && !empty($_FILES["uploadfile"]["name"])) {

    if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $targetDir)) {

        //$sql = "INSERT INTO products (image) VALUES ('$fileName') ";
        $sql = "INSERT INTO products (productname, image, price, description) VALUES ('$productname', '$fileName',  '$price', '$description')";
        $insert = mysqli_query($conn, $sql);
        //$stmt = $conn->query($sql);

    }
//}

// $productname = $_POST["productname"];
// $price = $_POST["price"];
// $description = $_POST["description"];

// $sql = "INSERT INTO products (productname, price, description) VALUES ('$productname',  '$price', '$description')";
// echo $sql;
//$stmt = $conn->query($sql);
$conn->close();
header("Location: sellusedproduct.php");
?>