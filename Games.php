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
  <p>About me</p>
  <h2>I am a student learning in 'RVT' and im on my 3rd course out of 4 also i plan to go for further education in a university</h2>
  <h2>I have alot of expierience with many programming languages like css, html, js, c#, c++, python and some others</h2>
  <h2>I don't have any expierience with working yet so i don't really know how it is to work</h2>
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