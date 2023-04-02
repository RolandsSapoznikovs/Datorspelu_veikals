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
      <form action="index.php" method="GET">
        <input type="submit" value="Consoles" name = "Category">
      </form>
      <ul class = "dropdown">
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="Xbox" name = "Category">
          </form>
        </li>
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="PS4" name = "Category">
          </form>
        </li>
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="Switch" name = "Category">
          </form>
        </li>
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="VR" name = "Category">
          </form>
        </li>
      </ul>
    </li>
    <li>
    <form action="index.php" method="GET">
      <input type="submit" value="Games" name = "Category">
    </form>
    <ul class = "dropdown">
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="Console Games" name = "Category">
          </form>
        </li>
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="Computer Games" name = "Category">
          </form>
        </li>
      </ul>
    </li>
    <li>
    <form action="index.php" method="GET">
      <input type="submit" value="Computers" name = "Category">
    </form>
    <ul class = "dropdown">
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="Stationary" name = "Category">
          </form>
        </li>
        <li>
          <form action="index.php" method="GET">
            <input type="submit" value="Laptops" name = "Category">
          </form>
        </li>
      </ul>
    </li>
    <li>
      <form action="Giftcards.php" method="POST">
        <input type="submit" value="Giftcards" name = "Category">
      </form>
      <ul class = "dropdown">
        <li>
          <form action="Giftcards.php" method="POST">
            <input type="submit" value="MyGiftcards" name = "Category">
          </form>
        </li>
        <li>
          <form action="Giftcards.php" method="POST">
            <input type="submit" value="Buy Giftcards" name = "Category">
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
    <div>
    <p>Giftcards</p>
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
