<!DOCTYPE html>
<html>

<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="box shadow" id="log">
    <form action="login.php" class="contactform shadow" method="POST">
      <h1>Log In</h1>
      <!--check for issue and explain why cannot login-->
      <?php if (isset($_GET['error'])) { ?>
      <p class="error">
        <?php echo $_GET['error']; ?>
      </p>
      <?php } ?>
      <!--INPUTS-->
      <div>
        <input type="text" id="id_user" name="user_name" placeholder="*User" required="true"/>
      </div>
      <div>
        <input type="password" id="pass" name="password" placeholder="*password" required="true" />
      </div>
      <div class="button_submit">
        <input type="submit" value="Log In" />
      </div>
    </form>
  </div>
</body>

</html>