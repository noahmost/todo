<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
//    if the user is not authenticated then die
    if(!authenticateUser()) {
//        we are redirecting the user before we actually kill the program
        header("Location: " . $path . "index.php");
        die();
    }
?>
<h1 class="registerbuttonthing">CREATE BLOG POST</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>"> <!-- method is used to send information; action is where the info will be sent-->
    <div class="registercentering">
        <label for="title">  <!--text that is displayed infront of the  text box-->
        Title:  <!-- displays title infront of the title box-->
        </label>
        <input type="text" name="title" />
    </div>
    <div class="registercentering">
        <label for="post">Post: </label> <!-- displays post infront of the textarea-->
        <textarea name="post"></textarea>
        <!--a text area allows the user to type as much text as they want-->
    </div>
    <div class="registercentering">
        <button type="submit">Submit: </button> <!--this is a button that should submit the post to
                                                our database but it basically just refreshes the page-->
    </div>
    
</form>