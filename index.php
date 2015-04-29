<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once(__DIR__ . "/model/config.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple to-do list</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
<!--        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">-->
    </head>
<!--    <header>
        <button type="button">
            <a href="<?php echo $path . "register.php"?>">register</a>
        </button>
        <button type="button">
            <a href="<?php echo $path . "login.php"?>">login</a>
        </button>
        <button type="button">
            <a href="<?php echo $path . "controller/logout-user.php"?>">logout</a>
        </button>
    </header>-->
    <body class="indexbody">
        <div class="indexlinks">
            <a href="/todoapp/index.php">Home|</a>
            <a href="/todoapp/register.php">Register Here|</a>
            <a href="/todoapp/login.php">Login here|</a>
            <a href="/todoapp/controller/logout-user.php">Logout</a>
        </div>
        <div class="wrap">
            <div class ="task-list">
                <ul>
                    <?php require("includes/connect.php"); 
                    $mysqli = new mysqli('localhost', 'root', 'root', 'todo');
                    $query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
                    if($result = $mysqli->query($query)){
                        $numrows = $result->num_rows;
                        if($numrows>0){
                            while($row = $result->fetch_assoc()){
                                $task_id = $row['id'];
                                $task_name = $row["task"];
                                
                                
                              echo '<li'
                                . '<span>' . $task_name . '</span>'
                                      . '<img id="'. $task_id . 'class="delete-button" width="10px" src="images/close.svg"/>'
                                      . '</li>';
                            }
                        }
                    }
                            ?>
                </ul>
            </div>
        
        <form class="add-new-task" autocomplete="off">
            <input type="text" name="new-task" placeholder="Add new item..."/>
        </form>
        </div>
    </body>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
//        calling the add task function
        add_task();
        
        function add_task(){
            $('.add-new-task').submit(function()) {
                var new_task = $('.add-new-task input[name=new-task]').val();
                
                if(new_task !== '') {
                    $.post('includes/add-task.php', {task: new_task}, function(data){
                        $('add-new-task input[name=new-task]').val();
                                $(data).appendTo('.task-list ul').hide().fadeIn();
                    });
                }
                return false;
            });
        }
        $('.delete-button').click(function(){
            var current_element = $(this);
            var task_id = $(this). attr('id');
            
            $.post('includes/delete-task.php', {id: task_id}, function(){
                
            });
            current_element.parent().fadeOut("fast", function(){
                $(this).remove();
            });
        });
    
    </script>
</html>
