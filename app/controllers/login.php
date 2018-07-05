<?php

session_start();

class Login extends Controller {
    public function index() {
        $this->view('login/index');
    }

    public function login() {
        if (isset($_POST['login'])) {
            include '../app/core/Database.php';

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            //Error handlers
            //Check if empty
            if (empty($email) || empty($password)) {
                header("Location: http://localhost/public/login/index?login=empty");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_email='$email';";
                $result = mysqli_query($conn, $sql);

                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck < 1) {
                    header("Location: http://localhost/public/login/index?login=nowExsist");
                    exit();
                } else {
                    if ($row = mysqli_fetch_assoc($result)) { //Take all data and insert inside the row list
                        //De-hashing the password
                        $hashedPwdCheck = password_verify($password, $row['user_pwd']);

                        if ($hashedPwdCheck == false) {
                            header("Location: http://localhost/public/login/index?login=wrongpassword");
                            exit();
                        } elseif ($hashedPwdCheck == true) {
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

    public function logout() {
        // Initialize the session.
        // If you are using session_name("something"), don't forget it now!
        session_start();

        // Unset all of the session variables.
        $_SESSION = array();

        // If it's desired to kill the session, also delete the session cookie.
        // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finally, destroy the session.
        session_destroy();
    }
}