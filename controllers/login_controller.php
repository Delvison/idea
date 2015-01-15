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
    // TODO: check if username or email already exists

    // check password for validity
    if (check_pwd($password))
    {

      $email = $_POST['email'];
      $date = date("Y-m-d H:i:s");

      // called from models/members_model.php
      if (create_user($username, $password, $email, $date) ){
        header("Location: ../login.php");
        die();
      } else {
        header("Location: ../create_user.php?error=failed");
        die();
      }
    } else {
      header("Location: ../create_user.php?error=invalid_passwd");
      die();
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
      echo "<br> LOGIN WAS SUCCESSFUL";
      echo "<br> Logged in as ". $_SESSION['username'];
      header("Location: ../index.php");
      die();
    } else {
      echo "<br> LOGIN WAS UNSUCCESSFUL";
      header("Location: ../login.php?error=inc_pass");
      die();
    }

  }

  if ($_GET['logout'] != NULL)
  {
    logout();
  }
?>
