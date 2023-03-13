<!DOCTYPE html>
<html>
<head>
    <?php
    // Composer class autoloader
    require_once __DIR__ . '/vendor/autoload.php';
    ?>

    <title>IGame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/style.css" />
</head>
<body>

   <div class="header">IGame</div>
   <nav>
  <ul>
    <li>
    <form action="index.php" method="POST">
    <input type="submit" value="Home">
    </form>
    </li>
    <li>
    <form action="Computers.php" method="POST">
    <input type="submit" value="Computers">
    </form>
    </li>
    <li>
    <form action="Consoles.php" method="POST">
    <input type="submit" value="Consoles">
    </form>
    </li>
    <li>
    <form action="Games.php" method="POST">
    <input type="submit" value="Games">
    </form>
    </li>
  </ul>
</nav>
</div>

<div class="container">
  <div class="maintext">
    <div>
  <p>This is my portfolio website</p>
  <h2>Hope you enjoy your stay</h2>
  </div>
  <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
  
<!--   <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="firstname">First Name: </label>
                <input type="text" id="firstname" name="firstname">
                <label for="lastname">Last Name: </label>
                <input type="text" id="lastname" name="lastname">
                <button type="submit">GET</button>
                <button type="submit" formmethod="post">POST</button>
              </form>
              <?php include('src/Request.php');
    
    $NewRequest = new Request();
    $NewRequest->GetOrPost();
    $NewRequest->RequestedURI();
    $NewRequest->RequestParametrs();
    
    ?> -->
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
