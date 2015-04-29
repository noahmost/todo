<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="registerbuttonthing">Login</h1>

<form method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div class="registercentering">
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div class="registercentering">
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div class="registercentering">
        <input type="hidden" name="login" value="login" />
        <button type="submit">Submit</button>
    </div>
</form>

