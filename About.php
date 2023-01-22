<!DOCTYPE html>
<html>
<head>
</head>
<body>


<style>
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
  color: white;
  text-align: center;
  padding: 14px 200px;
  font-size: 30px;
  text-decoration: none;
}
nav input:hover {
  background-color: #111;
}


</style>


<div class="header">About</div>
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



</body>
</html>