<!DOCTYPE html>
<html>
<head>
    <?php
    // Composer class autoloader
    require_once __DIR__ . '/vendor/autoload.php';
    require_once('./php/Product.php')
    ?>

    <title>IGame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/style.css" />
</head>
<body>

<div class="header"><a href = "index.php">IGame<a></div>
   <ul>
    <li>
      <form action="Consoles.php" method="POST">
        <input type="submit" value="Consoles">
      </form>
      <ul class = "dropdown">
        <li>
          <form action="#" method="POST">
            <input type="submit" value="Xbox">
          </form>
        </li>
        <li>
          <form action="#" method="POST">
            <input type="submit" value="PS4">
          </form>
        </li>
        <li>
          <form action="#" method="POST">
            <input type="submit" value="Switch">
          </form>
        </li>
        <li>
          <form action="#" method="POST">
            <input type="submit" value="VR">
          </form>
        </li>
      </ul>
    </li>
    <li>
    <form action="Games.php" method="POST">
      <input type="submit" value="Games">
    </form>
    <ul class = "dropdown">
        <li>
          <form action="#" method="POST">
            <input type="submit" value="Console Games">
          </form>
        </li>
        <li>
          <form action="#" method="POST">
            <input type="submit" value="Computer Games">
          </form>
        </li>
      </ul>
    </li>
    <li>
    <form action="Computers.php" method="POST">
      <input type="submit" value="Computers">
    </form>
    <ul class = "dropdown">
        <li>
          <form action="#" method="POST">
            <input type="submit" value="Stationary">
          </form>
        </li>
        <li>
          <form action="#" method="POST">
            <input type="submit" value="Laptops">
          </form>
        </li>
      </ul>
    </li>
    <li class = "RegisterBtn">
      <form action="Register.php" method="POST">
        <input type="submit" value="Register">
      </form>
    </li>
    <li class = "LoginBtn">
      <form action="Login.php" method="POST">
        <input type="submit" value="Login">
      </form>
    </li>
  </ul>

<div class="container">
<div class = "row text-center py-5">
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

$sql = "SELECT ProductID, ProductImage, ProductName, ProductPrice FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    Product($row['ProductName'], $row['ProductPrice'], $row['ProductImage'], $row['ProductID']);
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
</div>
<footer>
  <div>
    <p>Copyright © 2023 My Website</p>
    <p>Powered by OpenAI</p>
  </div>
</footer>
</body>
</html>
