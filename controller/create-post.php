<?php
    require_once(__DIR__ . "/../model/config.php"); //we required config.php so we have access to the variables below
    require_once(__DIR__ . "/../view/header.php");
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //this post means were sending info; 
                                                  //title means this is how it knows to receive; FILER SANTIZIE makes it a string
    $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING); //were saving the input that went from the post on the blog into these variables
    //this gets the current date of today
    $date = new DateTime('today');
//    this gets the time of  the area that we put in the parenthesis
    $time = new DateTime('America/Los_Angeles');

    //the controller will recieve the info with inputpost
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'"); //running a query on our database in the query were inserting in our table posts
    if($query){
        echo "<p>Successfully inserted post: $title</p>"; //if the query is true then echo out this string
        echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("G:i");
        
    }
    else {
       echo "<p>" . $_SESSION["connection"]->error . "</p>"; //if the query is false then echo this strings
    }
    ?>
<html>
    <body>
        
    </body>
</html>