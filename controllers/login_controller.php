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

  if ($action == 'create_user')
  {
    $passwd_check = check_pwd($password);
    $username_check = check_username($username);

    // check password for validity
    if ($passwd_check && $username_check)
    {
      $email = $_POST['email'];
      $date = date("Y-m-d H:i:s");

      // called from models/members_model.php
      if (create_user($username, $password, $email, $date) )
      {
        header("Location: ../login.php");
        die();
      } else {
        header("Location: ../create_user.php?error=failed");
        die();
      }
    } else {
      // check for invalid password
      if (!$passwd_check){
        header("Location: ../create_user.php?error=invalid_passwd");
        die();
      }
      // check for invalid username
      if (!$username_check){
        header("Location: ../create_user.php?error=invalid_username");
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
