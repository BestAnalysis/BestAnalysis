<?php
    include_once 'dbh-inc.php';

    //This line of code can be used for more secure way to get input
    //$first = mysqli_real_escape_string($conn, $_POST['first']);
    //than this
    //$first = $_POST['first'];

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    

    $sql_insert = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
    // Insert data safely with Prepared Statements
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql_insert)) {
        echo "SQL error";
    }else {
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        mysqli_stmt_execute($stmt);
    }



    header("Location: db-ops.php?signup=success");