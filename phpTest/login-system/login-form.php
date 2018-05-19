<?php
  session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <script src="main.js"></script>
</head>
<body>
      <?php
          if(isset($_SESSION['u_id'])) {
            echo "<form action='includes/logout-inc.php' method='POST'>
              <button type='submit' name='logout'>Logout</button>
            </form>";
          } else {
            echo 
            "<form action='includes/login-inc.php' method='POST'>
                <div class='container'>
                  <label for='uid'><b>Username</b></label>
                  <input type='text' placeholder='Enter Username' name='uid' required>
                  <label for='pwd'><b>Password</b></label>
                  <input type='password' placeholder='Enter Password' name='pwd' required>
                  <button type='submit' name='submit'>Login</button>
                </div>
                <div class='container' style='background-color:#f1f1f1'>
                  <span class='psw'>Forgot <a href='#'>password</a></span>
                </div>
              </form>";
          }
      ?>

</body>
</html>