<!DOCTYPE html>
<html>
<head>
    <?php
    // Composer class autoloader
    require_once __DIR__ . '/vendor/autoload.php';
    ?>

    <title>IGame</title>
    <style type="text/css">
        .header{    
            height: 50px;
            background-color: black;
            color: white;  
            text-align: center;
            font-size: 30px; 
        }

        body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background-color: #272727;
  }

    nav {
  background-color: #333;
}
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
nav li {
  float: left;
}
nav input {
  color: black;
  text-align: center;
  padding: 14px 32px;
  font-size: 30px;
  text-decoration: none;
}
nav input:hover {
  background-color: #111;
}
.maintext{
  color: white;
  text-align: center
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
}
footer a {
  color: white;
  text-decoration: none;
}
footer a:hover {
  color: #111;
}
.container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  min-height: 90vh;
}


    </style>
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

<div class="container">
  <div class="maintext">
    <div>
  <p>This is my portfolio website</p>
  <h2>Hope you enjoy your stay</h2>
  </div>
  
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
  <footer>
    <div>
      <p>Copyright © 2023 My Website</p>
      <p>Powered by OpenAI</p>
    </div>
  </footer>
  </div>
</body>
</html>
