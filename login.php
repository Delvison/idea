<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
</head>
<body>


    <h4>Login</h4>
    <form action="controllers/login_controller.php" method="POST">
      <input style="height:30px" type="text" placeholder="username" name="username" />
      </br>
      <input style="height:30px" type="password" placeholder="password" name="password" />
      </br>
      <input style="display:none" name="action" value="login"></input>
      <button type="submit" class="btn-primary">login</button>
    </form>
    <p>
      Don't have an account?
      <a href="create_user.php">Create an account</a>
    </p>


</body>
</html>
