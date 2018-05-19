<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    
    <?php
    /*
        echo "test123"; //this password will be hashed
        echo "<br>";
        echo password_hash("test123", PASSWORD_DEFAULT);
    */
        $input = "test123";
        $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

        echo password_verify($input, $hashedPwdInDb);
    ?>



</body>
</html>