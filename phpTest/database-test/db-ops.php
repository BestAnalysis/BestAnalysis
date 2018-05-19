<?php
    include_once 'dbh-inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php

    // Get from db
    $sql_get = "SELECT * FROM users;";
    $results_get = mysqli_query($conn, $sql_get);
    $resultCheck = mysqli_num_rows($results_get);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($results_get)) {
            echo $row['user_uid'];
        }
    }

    //Insert to db

    // $sql_insert = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Mark', 'Implier', 'mark@gmai.com', 'markimoo', 'kingofthesquirrels');";
    // $result_insert = mysqli_query($conn, $sql_insert);

    // Get data safely with Prepared Statements

    $data = "Admin";
    //Created a template
    $sql = "SELECT * FROM users WHERE user_uid=?;";
    //Create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    //Prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    }else {
        //Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data); //if there were 2 placeholder it would be "ss"
        //Run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
        }
    }
?>

<form action="signup-inc.php" method="POST">
    <input type="text" name="first", placeholder="Firstname">
    <br>
    <input type="text" name="last", placeholder="Lastname">
    <br>    
    <input type="text" name="email", placeholder="Email">
    <br>    
    <input type="text" name="uid", placeholder="Username">
    <br>    
    <input type="password" name="pwd", placeholder="Password">
    <br>    
    <button type="submit" name="submit">Sign up</button>
</form>


    
</body>
</html>