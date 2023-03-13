<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="src/style.css" />
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

<div class="container">
  <div class="maintext">
    <h2>Your name:</h2>
    <form>
        <input type="text">
    </form>
    <h2>Phone number:</h2>
    <form>
        <input type="tel">
    </form>
    <h2>Email:</h2>
    <form>
        <input type="email">
    </form>
    <h2>Type of service</h2>
    <form>
        <input type="text">
    </form>
    <form class="Requestbutton" action="ServiceRequest.php" method="POST">
    <input type="submit" value="Request a service">
    </form>
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