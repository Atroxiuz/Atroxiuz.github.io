<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'/>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel='stylesheet' href='./css/loginpage.css'>
        <title>Welcome To PhotoGram</title>
    </head>
    <body>
      <div class="header-login">
        <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
        		<button type="submit" name="logout-submit">Log out</button>
        	</form>';
        }
        else {
          echo '<form action="includes/login.inc.php" method="post">
        		<input type="text" name="mailuid" placeholder="Username/Email...">
        		<input type="password" name="pwd" placeholder="Password">
        		<button type="submit" name="login-submit">Login</button>
        	</form>
        	<a href="signup.php">Sign up</a>';
        }
         ?>

      </div>
        <form class='box' action='feed.html' method='get'>
          <h1>PhotoGram</h1>
          <input type='uid' name='uid' placeholder='Username' />
          <input type='pwd' name='pwd' placeholder='Password' />
          <input type='submit' name='' value='Log in' />
          <p id='or'>or</p>
          <a id='sign_up' href='signup.php'>Sign up</a>
        </form>

          <p id='footer'>&copy; 2019 Photogram</p>
    </body>
</html>
