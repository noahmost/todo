<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../view/header.php");
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//    this is a query where we are going to select our salt and password from users table where our username was sent in via the post
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    
    if($query->num_rows == 1){
        $row = $query->fetch_array();
//        check if the hashedpassword is equal to the new hashedpassword according to the salt
        if($row["password"] === crypt($password, $row["salt"])){
//            this makes sure the user has been authenticated in this session
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
        }
        else {
            echo "<p>Invalid username and password</p>";
        }
    }
    else {
        echo "<p>Invalid username and password</p>";
    }
    ?>
<html>
    <body class="loginbody">
        
    </body>
    
</html>