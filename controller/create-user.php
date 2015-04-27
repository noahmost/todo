<?php

//    we want to access the database object within this page
require_once(__DIR__ . "/../model/config.php");
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//filter sanitize string means that any invalid characters that cannot be in strings are deleted
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//the $$ are variables to php so we have to split them up; uniqid creates a super unique id for the password
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
//this creates an encrypted password for us with salt
$hashedPassword = crypt($password, $salt);
//created a query which inserts into our table called users, were setting email, username, password, and salt
$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");
if($query) {
    echo "Succesfuly created user: $username";
}
else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}