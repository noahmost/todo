<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="registerbuttonthing">Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div class="registercentering">
        <label for="email">Email: </label>
        <!--this allows the user to input text onto the page-->
        <input type="text" name="email" /> 
    </div>
    <div class="registercentering">
        <label for="username">Username: </label>
        <!--this allows the user to put text onto the page-->
        <input type="text" name="username"/>
    </div>
    <div class="registercentering">
        <!--this allows you to create a password and the text shows up as dots-->
        <label for="password">Password: </label>
        <input type="password" name="password"
    </div>
    <div class="registercentering">
        <!--a submit button that submits your work above-->
        <button type="submit">Submit: </button>
    </div>
</form>