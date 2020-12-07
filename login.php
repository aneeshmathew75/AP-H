<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Document</title>
</head>
<body>
<div class="signup-form">
<h1 class="heading">Log In</h1>
<form action="includes/login.inc.php" method="POST" class="login">
    <div class="field">
        <input type="text" name="mailuid" placeholder="Email Address" required>
    </div>
    <div class="field">
        <input type="password" name="pwd" placeholder="Password" required>
    </div>
    <div class="pass-link">
        <a href="#">Forgot password?</a>
    </div>
 
    <button class="btn" type="submit" name="login-submit">Log In </button>
    <div class="signup-link">
    Not a member? <a href="signup.php">Signup now</a></div>
</form>
</div>
</body>
</html>