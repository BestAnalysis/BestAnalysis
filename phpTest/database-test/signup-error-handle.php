<?php

    //We then check if the user has clicked the signup button
    if (isset($_POST['submit'])) {

        //Then we include the database connection
        include_once 'dbh-inc.php';
        //And we get the data from the signup form
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];    

        //Check if inputs are empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
            header("Location: ../error-handle.php?signup=empty");
            exit();
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../error-handle.php?signup=char");
                exit();
            } else {
                //We check if the email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../error-handle.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                    exit();
                } else {
                    header("Location: ../error-handle.php?signup=success");
                }
            }
        }
    } else {
        header("Location: ../error-handle.php?signup=error");
        exit();
    }