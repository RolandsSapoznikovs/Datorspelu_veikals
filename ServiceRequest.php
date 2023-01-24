<!DOCTYPE html>
<html>
<head>
</head>
<body>


<style>
  body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background-color: #272727;
  }

  .header{    
    height: 50px;
    background-color: black;
    color: white;  
    text-align: center;
    font-size: 30px; 
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
  padding: 14px 188.5px;
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
.Requestbutton{
    padding-top: 30px;
}

</style>


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