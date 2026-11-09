<?php

include_once 'backend/register/register.php';

?>

<div class="register-content">
<div class="form-field">
    <header>Create New Account</header>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?page=register" method="POST">
<div class="input-field">
<label for="username">Username</label>
<input type="text" name="username" required>
</div>

<div class="input-field">
<label for="password">Password</label>
<input type="password" name="password" required>
</div>

<input type="submit" name="register" value="Create">
</form>


</div>


</div>
