<?php require 'partials/head.php'; ?>
<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="User Name" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
</div>
<?php require 'partials/foot.php'; ?>