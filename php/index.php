
<?php
    require_once (__DIR__ . "/controller/login-verify.php"); //this inserts code from login-verify.php
    require_once(__DIR__ . "/view/header.php"); // this insters the code from header.php
    if(authenticateUser()){
    require_once(__DIR__ . "/view/navigation.php"); // this inserts the code from header.php
    }
    require_once(__DIR__ . "/controller/create-db.php"); // inserts code from create-db.php to here
    require_once(__DIR__ . "/controller/read-posts.php");
    require_once(__DIR__ . "/view/footer.php"); // inserts code from footer.php
    require_once (__DIR__ . "/controller/read-posts.php"); //inserts code from read-posts.php
?>

<html>
    <body class="indexbody">
    
    </body>
</html>