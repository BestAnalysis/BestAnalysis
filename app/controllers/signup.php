<?php

session_start();

class Signup extends Controller {
    public function index() {
        $this->view('signup/index');
    }

    public function signup() {
        if (isset($_POST['signup'])) {
            include '../app/core/Database.php';

            $firstName = mysqli_real_escape_string($conn, $_POST["firstname"]);
            $lastName = mysqli_real_escape_string($conn, $_POST["lastname"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);


            //Error handlers
            //Check for empty fields
            if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
                header("Location: http://localhost/public/signup/index?signup=empty");
                exit();
            } else {
                //Check input chars
                if (!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)) {
                    header("Location: http://localhost/public/signup/index?signup=invalid");
                    exit();
                } else {
                    //Check email
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        header("Location: http://localhost/public/signup/index?signup=email");
                        exit();
                    } else {
                        $sql = "SELECT * FROM users WHERE user_email='$email';";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            header("Location: http://localhost/public/signup/index?signup=exists");
                            exit();
                        } else {
                            // Hashing the password
                            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                            
                            //Insert the user into the database
                            $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$firstName', '$lastName', '$email', '$hashedPwd');";

                            mysqli_query($conn, $sql);
                            //login the user
                            $_SESSION['u_id'] = $row['user_id'];
                            $_SESSION['u_email'] = $row['user_email'];
                            $_SESSION['u_first'] = $row['user_first'];
                            $_SESSION['u_last'] = $row['user_last'];
                            $_SESSION['u_email'] = $row['user_email'];

                            header("Location: http://localhost/public/home/user");
                            exit();
                        }
                    }
                }
            }
        } 
    }  
}   