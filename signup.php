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
    <h1 class="heading">Sign Up</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<p class="signuperror">Fill in all fields!</p>';
        }
        else if ($_GET['error'] == "invalidmailUserName") {
          echo '<p class="signuperror">Invalid username and e-mail!</p>';
        }
      }
    ?>
<form action="includes/signup.inc.php" class="signup" method="POST">
            <div class ="field">
              <input type="text" name="UserName" placeholder="Username" >

            </div>
            <div class="field">
              <input type="text" name="mail" placeholder="Email Id" >
            </div>
            <div class="field">
              <input type="password" name="pwd" placeholder="Password" >
            </div>
            <div class="field">
              <input type="password" name="pwd-repeat" placeholder="Confirm Password" >
            </div>
            <button class="btn" type="submit" name="signup-submit">Signup</button>
</form>
<p>Already have account? 
    <a href="login.php">Log In</a>
</p>
</div>
</body>
</html>