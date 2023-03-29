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
         
        // Close connection
        mysqli_close($conn);
        ?>

<p>Registered succesfuly</p>
<button><a href = "index.php">OK</a></button> 