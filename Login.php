<!DOCTYPE html>
<html>
<head>
</head>
<body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="src/style.css" />


<div class="header"><a href = "index.php">IGame<a></div>

<div class="container">
  <div class="maintext">
  <p>Login</p>
  <div id = "RegisterForm">
        <form action = "LoginControl.php" type = "POST">     
            <div><label>Email</label>
            <input type = "email" id="Email" name = "Email"></div>
            <div><label>Password</label>
            <input type = "password" id="Password" name = "Password"></div> 
            <input type = "submit" value = "Register">
        </form>
        <?php
  if (isset($_GET['error'])) {
    $error_msg = $_GET['error'];
    echo "<p>" . $error_msg . "</p>";
  } ?>
    </div>
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