<!DOCTYPE html>
<html>
<head>
</head>
<body>


<div class="header">Services</div>
<nav>
  <ul>
    <li>
    <form action="index.php" method="POST">
    <input type="submit" value="Home">
    </form>
    </li>
    <li>
    <form action="About.php" method="POST">
    <input type="submit" value="About">
    </form>
    </li>
    <li>
    <form action="Services.php" method="POST">
    <input type="submit" value="Services">
    </form>
    </li>
    <li>
    <form action="Contact.php" method="POST">
    <input type="submit" value="Contact">
    </form>
    </li>
  </ul>
</nav>

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