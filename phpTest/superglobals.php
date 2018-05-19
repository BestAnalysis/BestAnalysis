<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>

    <?php  

        echo $_POST["name"]; //Echo the value of the name
        echo $_GET["name"]; //Echo the value of the name
    ?>

    <!-- Pass it into the url and we can see it -->
    <form method="GET"> <!-- method: What should form do? -->
        <input type="hidden" name="name" value="value"/>
        <button type="submit">Get</button>
    </form>

    <!-- Pass it into the url but we cant see it -->
    <form method="POST"> <!-- method: What should form do? -->
        <input type="hidden" name="name" value="value"/>
        <button type="submit">Post</button>
    </form>
<!-- ################# SESSION AND COOKIE ################ -->
    <ul>
        <li><a href="superglobals.php">Home</a></li>
        <li><a href="sglobals-contact.php">Contact</a></li>        
    </ul>

    <?php

        /*
        $_COOKIE : Saves information on user side. Has a expiration date
        $_SESSION: Saves information on server side. When browser closed its removed.
        */

        setcookie("name", "Daniel", time() + 86400); //Variable name, Value, Expiration date
        $_SESSION["username"] = "dani";
        echo $_SESSION["username"];

        if (isset($_SESSION["username"])){
            echo "logged in";
        }else {
            echo "not logged in";
        }

    ?>

</body>
</html>