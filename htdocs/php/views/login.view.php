<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="User Name" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="password" required>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>