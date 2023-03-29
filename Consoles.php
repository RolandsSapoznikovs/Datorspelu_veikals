<!DOCTYPE html>
<html>
<head>
</head>
<body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/style.css" />


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
  <div class="maintext">
    <p>My Services</p>
    <h2>I don't have alot to offer because i don't have a lot of expierience with work but some of the things i can do is:</h2>
    <h3>Backend development</h3>
    <h3>Frontend development</h3>
    <h3>Database upkeep (sql)</h3>
    <h3>c++ programming</h3>
    <h3>c# programming</h3>
    <form action="ServiceRequest.php" method="POST">
    <input type="submit" value="Request a service">
    </form>
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