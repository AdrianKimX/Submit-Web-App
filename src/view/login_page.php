<?php

include_once 'backend/login/login.php';

?>

<div class="register-content">
<div class="form-field">
    <header>Login</header>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?page=login" method="POST">
<div class="input-field">
<label for="username">Username</label>
<input type="text" name="username" required>
</div>

<div class="input-field">
<label for="password">Password</label>
<input type="password" name="password" required>
</div>

<input type="submit" name="login" value="Create">
</form>


</div>


</div>
