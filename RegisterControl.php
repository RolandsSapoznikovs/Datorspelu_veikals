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

$UserName =  $_REQUEST['Username'];
$PassWord = $_REQUEST['Password'];
$Email =  $_REQUEST['Email'];



$sql = "SELECT * FROM users WHERE UserName = '$UserName'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
  $sql = "SELECT * FROM users WHERE UserEmail = '$Email'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO users  VALUES (DEFAULT, '$UserName',
    '$PassWord','$Email')";

    if(mysqli_query($conn, $sql)){

      nl2br("\n$UserName\n $PassWord\n "
          . "$Email\n");

          header("Location: Login.php");
          die();
    } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
    }
  }else{
    $error_msg = "Sorry, that email already exists. Please try again.";
    header("Location: Register.php?error=" . urlencode($error_msg));
    die();
  }

} else {
    $error_msg = "Sorry, that username already exists. Please try again.";
    header("Location: Register.php?error=" . urlencode($error_msg));
    die();
}

if (isset($error_msg)) {
  // Output error message in HTML
  echo "<p>Error: " . $error_msg . "</p>";
}

mysqli_close($conn);
?>