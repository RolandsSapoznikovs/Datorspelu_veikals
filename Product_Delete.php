<?php
error_reporting(E_ERROR);   
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

$Product = $_GET['product'];

$sql = "DELETE FROM products WHERE ProductID = '$Product'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: Admin.php');
    exit();
  } else {
    echo "Error deleting record: " . $conn->error;
  }

$conn->close();
?>