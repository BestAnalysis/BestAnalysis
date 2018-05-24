<?php

session_start();

if (isset($_POST['submit'])) {
    include 'dbh-inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Is input empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../login-form.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid';";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if ($result_check < 1) {
            header("Location: ../login-form.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) { //get all data from result as an array
                //Dehashing the password;
                $hashed_pwd_check = password_verify($pwd, $row['user_pwd']);
                if ($hashed_pwd_check == false) {
                    header("Location: ../login-form.php?login=error");
                    exit();
                }
                elseif ($hashed_pwd_check == true) {
                    //login the user
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header("Location: ../login-form.php?login=succcess");
                    exit();
                    
                }
            }
        }
    }

} else {
    header("Location: ../login-form.php?login=error");
    exit();    
}