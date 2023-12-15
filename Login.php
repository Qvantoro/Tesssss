<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login-container">
<h2>Login</h2>
<form action="login_process.php" method="post">
<label for="username">Username:</label> <input type="text" name="username" required>
<br>
<label for="password">Password:</label> <input type="password" name="password" required>
<br>
<input type="submit" value="Login">
</form>
<p>Belum punya akun? <a href="register.php">Daftar disini</a>.</p>
 </div>
</body>
</html>