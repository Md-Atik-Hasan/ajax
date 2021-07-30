<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style media="screen">
      label {
        display: inline-block;
        width: 80px;
        padding: 5px;
      }
      button {
        margin: 5px;
      }
      .error {
        padding-left: 10px;
        color: red;
      }
    </style>

    <title>Login Form</title>
  </head>
  <body>
    

    <h1>Login Form</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
      <label for="username">Username: </label>
      <input type="text" name="username" value="<?php echo $username; ?>">
      <br>
      <label for="password">Password: </label>
      <input type="password" name="password" value="<?php echo $password; ?>">
      <br>
      <button type="submit">Login</button>
    </form>
    <span class="error"><?php echo $error; ?></span>
  </body>
</html>