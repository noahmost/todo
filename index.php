<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple to-do list</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        
    </head>
    <body>
        <div class="wrap">
            <div class ="task-list">
                <ul>
                    <?php require("includes/connect.php"); ?>
                </ul>
            </div>
        
        <form class="add-new-task" autocomplete="off">
            <input type="text" name="new-task" placeholder="Add new item..."/>
        </form>
        </div>
    </body>
</html>
