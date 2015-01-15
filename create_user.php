<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
</head>

<body>

  <h4>Signup for Idea!</h4>
  <form action="controllers/login_controller.php" method="POST">
    <input style="height:30px" type="text" placeholder="username" name="username" />
    </br>
    <input style="height:30px" type="text" placeholder="email" name="email" />
    </br>
    <input style="height:30px" type="password" placeholder="password" name="password" id="password" />
    </br>
    <div id="passwd_status">
      <p id="meow">

      </p>
    </div>
    <input style="display:none" name="action" value="create_user"></input>
    <button type="submit" class="btn-primary">signup</button>
  </form>
  <p>
    Already have an account?
    <a href="login.php">Login</a>
  </p>

  <script>
    $(document).ready(function()
    {
      $('#password').bind('input',function()
      {
        if ( check_passwd( $('#password').val() ) ){
          $('#meow').text('good password');
          $('#meow').css('color','#00933b');
        } else {
          $('#meow').text('bad password');
          $('#meow').css('color','#cc0000');
        }
      });
    });

    $(document).ready(function()
    {
      var error = '<?php echo $_GET['error']; ?>';
      if (error == 'invalid_passwd') {
        alert("Password should contain at least one number, one lower case character, one upper case character, and be of length eight.");
      }
    });
  </script>
</body>

</html>
