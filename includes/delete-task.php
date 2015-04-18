<?php


$task_id = strip_tags($_POST['id']);
require('connect.php');
$mysqli = new mysqli("DELETE FROM tasks WHERE id='task_id'");

if($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")) {
    
}