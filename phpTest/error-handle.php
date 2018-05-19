<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <h2>Signup</h2>
    <form action="database-test/signup-error-handle.php" method="POST">
        <?php
            if (isset($_GET['first'])) { //if user entered a firstname return the form with firstname filled
                $first = $_GET['first'];
                echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
            } else {
                echo '<input type="text" name="first" placeholder="Firstname">'; //return empty
            }
            if (isset($_GET['last'])) {
                $last = $_GET['last'];
                echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
            } else {
                echo '<input type="text" name="last" placeholder="Lastname">';
            }
        ?>
        <input type="text" name="email" placeholder="E-mail">

        <?php
            if (isset($_GET['uid'])) {
                $uid = $_GET['uid'];
                echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
            } else {
                echo '<input type="text" name="uid" placeholder="Username">';
            }
        ?>
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Sign up</button>        
    </form>

    <?php
        /*
        //If anything is wrong, new form retured empty to user
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // Full URL from the browser

        if (strpos($fullUrl, "signup=empty")) {
            echo "All fields required!";
            exit();
        }
        elseif (strpos($fullUrl, "signup=char")) {
            echo "Invalid characters!";
            exit();
            
        }
        elseif (strpos($fullUrl, "signup=invalidemail")) {
            echo "Invalid email!";
            exit();
        }
        elseif (strpos($fullUrl, "signup=error")) {
            echo "Form is empty!";
            exit();
        }
        elseif (strpos($fullUrl, "signup=success")) {
            echo "Signup Succesfull!";
            exit();            
        }*/

        if (!isset($_GET['signup'])) {
            exit();
        } else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck == "empty") {
                echo "All fiels required!";
                exit();
            }
            elseif ($signupCheck == "char") {
                echo "Invalid characters!";
                exit();
            }
            elseif ($signupCheck == "email") {
                echo "Invalid email";
                exit();
            }
            elseif ($signupCheck == "success") {
                echo "Signup Successfull";
                exit();
            }
        }

    ?>
</body>
</html>