<?php
    session_start();
    if(isset($_SESSION["login"]))
    {
        header("Location:index.php");
        exit;
    }
    require 'functions.php';
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1 )
        {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"]))
            {
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    } 
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <style></style>
 </head>
 <body>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password error</p>
    <?php endif; ?>
    <div id="card"> 
        <div id="card-content">
            <div id="card-title">
              <h2>LOGIN ADMIN</h2>
              <div class="underline-title"></div>
            </div>
            <form action ="" method="post" class="form"> 
                <label for="user-email" style="padding-top:13px">&nbsp;Username</label>
                <input
                id="user-email"
                class="form-content"
                type="text"
                name="username"
                autocomplete="on"
                required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input
                id="user-password"
                class="form-content"
                type="password"
                name="password"
                required />
                <div class="form-border"></div>
                <button id="submit-btn" type="submit" name="login"  >LOGIN</button> 
            </form>
          </div>
    </div>

 </body>
</html>