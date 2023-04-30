<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "igame";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$ProductName =  $_REQUEST['Name'];
$ProductCategory = $_REQUEST['Category'];
$ProductImage =  $_REQUEST['Image'];
$ProductPrice =  $_REQUEST['Price'];


$sql = "INSERT INTO products (ProductImage, ProductName, ProductCategory, ProductPrice) VALUES ('$ProductImage', '$ProductName', '$ProductCategory', '$ProductPrice')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: Admin.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
?>