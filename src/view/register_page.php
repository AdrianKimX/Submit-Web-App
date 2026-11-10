<?php

include_once 'backend/register/register.php';

?>

<div class="register-content">
<div class="form-field">
    <header>Create New Account</header>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?page=register" method="POST">
<div class="input-field">
<label for="username">Username</label>
<input type="text" name="username" id="username" required>
</div>

<div class="input-field">
<label for="password">Password</label>
<div class="pass-wrap">
<input type="password" name="password" id="password" required>
<button type="button" class="pass-toggle" aria-label="Show password"><i class="bi bi-eye"></i></button>
</div>
<small class="strength" id="strength"></small>
</div>

<input type="submit" name="register" value="Create">
</form>

<p class="form-switch">Already have an account? <a href="?page=login">Login</a></p>

</div>


</div>
<script src="view/view.js" defer></script>
