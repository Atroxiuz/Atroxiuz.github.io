<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'/>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel='stylesheet' href='./css/signuppage.css'>
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


<main>
  <div class="wrapper-main">
    <section class="section-default">
<h1>PhotoGram</h1>
<<?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == "emptyfields") {
    echo '<p class="signuperror">Fill in all fields!</p>';
  }
  else if ($_GET["error"] == "invaliduidmail") {
    echo '<p class="signuperror">Invalid username and e-mail!</p>';
  }
  else if ($_GET["error"] == "invalidmail") {
    echo '<p class="signuperror">Invalid e-mail!</p>';
  }
  else if ($_GET["error"] == "invaliduid") {
    echo '<p class="signuperror">Invalid username!</p>';
  }
  else if ($_GET["error"] == "passwordcheck") {
    echo '<p class="signuperror">Your passwords do not match!</p>';
  }
  else if ($_GET["error"] == "usertaken") {
    echo '<p class="signuperror">Username is already taken!</p>';
  }
}
else if ($_GET["signup"] == "success") {
  echo '<p class="signuperror">Signed up successfully!</p>';
}
 ?>
 <form class='box' action='feed.html' method='get'>
   <h1>PhotoGram</h1>
   <input type='uid' name='' placeholder='Username' />
   <input type='mail' name='' placeholder='E-mail' />
   <input type='pwd' name='' placeholder='Password' />
   <input type='pwd-repeat' name='' placeholder='Repeat Password' />
   <input type='sign_up' href='index.html' value='Sign up' />
 </form>

   <p id='footer'>&copy; 2019 Photogram</p>
</section>
</div>
</main>

</body>
</html>
