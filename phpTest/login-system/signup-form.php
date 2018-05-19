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
    <form action="includes/signup-inc.php" method="POST" style="border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="first"><b>First Name</b></label>
        <input type="text" placeholder="Firstname" name="first" required>

        <label for="last"><b>Last Name</b></label>
        <input type="text" placeholder="Lastname" name="last" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="uid"><b>Username</b></label>
        <input type="text" placeholder="Username" name="uid" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </form>
</body>
</html>