<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="register_style.css">
  </head>
  <body>
    <div class="header">
        <h1>Login</h1>
    </div>
    <div>
      <form method="post" action="login.php">
        <div class='userInput'>
          <label>Username</label>
          <input type="text" name="username">
        </div>

        <div class='userInput'>
          <label>Password</label>
          <input type="password" name="password_1">
        </div>

        <div class="userInput">
          <button type="submit" name="login" class="btn">Log in</button>
        </div>
        <p>
          Not a member yet? <a href="register.php">Sign up</a>
        </p>
      </form>
    </div>
  </body>
</html>
