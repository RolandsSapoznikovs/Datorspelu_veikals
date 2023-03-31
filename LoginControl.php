<?php

session_start();
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
$PassWord = $_REQUEST['Password'];
$Email =  $_REQUEST['Email'];

$sql = "SELECT UserName FROM users WHERE UserEmail = '$Email' and UserPassword = '$PassWord'";
$result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // set the session variable to store the user's username
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['UserName'];

    // redirect the user to the logged-in page
    header('Location: LoggedIn.php');
    exit();
  } else {
    // display an error message if the login credentials are incorrect
    $error_msg = "Invalid email or password";
    header("Location: Login.php?error=" . urlencode($error_msg));
    die();
  }

  mysqli_close($conn);
?>