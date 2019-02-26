<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="register_style.css">
  </head>
  <body>
    <div class="header">
        <h1>Register</h1>
    </div>
    <div>
      <form method="post" action="register.php">
        <div class='userInput'>
          <label>Username</label>
          <input type="text" name="username">
        </div>
        <div class='userInput'>
          <label>Email</label>
          <input type="text" name="email">
        </div>
        <div class='userInput'>
          <label>Password</label>
          <input type="password" name="password_1">
        </div>
        <div class='userInput'>
          <label>Confirm Password</label>
          <input type="password" name="password_2">
        </div>
        <div class="userInput">
          <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
          Already a member? <a href="login.php">log in</a>
        </p>
      </form>
    </div>
  </body>
</html>
