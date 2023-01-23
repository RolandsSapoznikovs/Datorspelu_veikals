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
  color: white;
  text-align: center;
  padding: 14px 197.5px;
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

<div class="container">
  <div class="maintext">
  <p>About me</p>
  <h2>I am a student learning in 'RVT' and im on my 3rd course out of 4 also i plan to go for further education in a university</h2>
  <h2>I have alot of expierience with many programming languages like css, html, js, c#, c++, python and some others</h2>
  <h2>I don't have any expierience with working yet so i don't really know how it is to work</h2>
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