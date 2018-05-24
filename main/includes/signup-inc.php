<?php

if (isset($_POST["submit"])) {
    include_once 'dbh-inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Empty fields
    if (empty($first) || empty($last) || empty($first) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../signup-form.php?signup=empty");
        exit();
    } else {
        //Input char validation
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../signup-form.php?signup=invalid");
            exit();
        } else {
            //Email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup-form.php?signup=email");
                exit();
            } else {
                //check uids in database
                $sql_get_uid = "SELECT * FROM users WHERE user_uid='$uid';";
                $result_get_uid = mysqli_query($conn, $sql_get_uid);
                $result_check = mysqli_num_rows($result_get_uid); //if uid exists > 0

                if ($result_check > 0) {
                    header("Location: ../signup-form.php?signup=uidtaken");
                    exit();
                } else {
                    //Hashing password
                    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert user to db
                    $sql_insert_user = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
                                        VALUES ('$first', '$last', '$email', '$uid', '$hashed_pwd');";

                    mysqli_query($conn, $sql_insert_user);
                    header("Location: ../signup-form.php?signup=success");
                    exit();
                }

            }
        }
    }

} else {
    header("Location: ../signup-form.php");
    exit();
}