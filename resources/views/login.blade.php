<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ 'css/home/login.css' }}">
</head>
<body>
      <div class="login-card">
        <form action="#">
        <h2>Login</h2>
            <div class="input-group">
                <lable>Username</lable>
                <input name="name" type="text" placeholder="username"  required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input name="password" type="password"  placeholder="password" required>
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="login-btn">Sign-in</button>
            <div>
                <p>Don't have an account -><a href="#">
                Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>
</html>
