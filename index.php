<!DOCTYPE html>
<html>
<head>
    <?php
    // Composer class autoloader
    require_once __DIR__ . '/vendor/autoload.php';
    ?>

    <title>Portfolio</title>
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
</head>
<body>

   <div class="header">My Portfolio</div>
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
   <!--  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="firstname">First Name: </label>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Last Name: </label>
        <input type="text" id="lastname" name="lastname">
        <button type="submit">GET</button>
        <button type="submit" formmethod="post">POST</button>
    </form> -->
    <script>
    document.getElementById("redirect-button").addEventListener("click",
function(){
    window.location.href = "New.php";
});
    </script>
    <!-- <?php include('src/Request.php');
    
    $NewRequest = new Request();
    $NewRequest->GetOrPost();
    $NewRequest->RequestedURI();
    $NewRequest->RequestParametrs();
    
    ?> -->
</body>
</html>
