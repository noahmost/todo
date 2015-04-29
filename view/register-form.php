<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="registerbuttonthing">Register</h1>

<form method="POST" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div class="registercentering">
        <label for="email">E-mail: </label>
        <input type="text" name="email"/>
    </div>
    
    <div class="registercentering">
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div class="registercentering">
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div class="registercentering">
        <button type="submit">Submit</button>
    </div>
</form>

