<?php
/**
* Controller script responsible for handling user login and the creation of a
* new user.
* @author Delvison Castillo delvisoncastillo@gmail.com
*/

  include $_SERVER['DOCUMENT_ROOT'].'/idea/models/members_model.php';
  include $_SERVER['DOCUMENT_ROOT'].'/idea/lib/check_pwd.php';

  $action = $_POST['action'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  if ($action == 'create_user')
  {
    // check for invalid password
    if (!check_pwd($password)){
      header("Location: ../create_user.php?error=invalid_passwd");
      die();
    }
    // check for invalid username
    else if (!check_username($username)){
      header("Location: ../create_user.php?error=invalid_username");
      die();
    }
    // check for invalid email
    else if (!check_email($email)){
      header("Location: ../create_user.php?error=invalid_email&username=".
      $username."&email=".$email);
      die();
    }
    else // password and username valid. create user.
    {
      // get current date
      $date = date("Y-m-d H:i:s");

      // called from models/members_model.php
      if (create_user($username, $password, $email, $date) )
      {
        header("Location: ../login.php");
        die();
      } else {
        header("Location: ../create_user.php?error=failed&username=".
        $username."&email=".$email);
        die();
      }
    }
  }

  if ($action == 'login')
  {
    if ( login_user($username, $password) )
    {
      // start a new session
      session_id('mySessionID');
      session_start();
      // save username to the session
      $_SESSION['username'] = $username;
      header("Location: ../index.php");
      die();
    } else {
      header("Location: ../login.php?error=inc_pass");
      die();
    }
  }

  if ($_GET['logout'] != NULL)
  {
    logout();
  }
?>
