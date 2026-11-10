<?php

include_once 'backend/login/login.php';

?>

<div class="register-content">
<div class="form-field">
    <header>Login</header>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?page=login" method="POST">
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
</div>

<input type="submit" name="login" value="Login">
</form>

<p class="form-switch">No account yet? <a href="?page=register">Create one</a></p>

</div>


</div>
<script src="view/view.js" defer></script>
