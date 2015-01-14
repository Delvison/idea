<?php
/**
* Controller script responsible for handling user login and the creation of a
* new user.
* @author Delvison Castillo delvisoncastillo@gmail.com
*/

  include $_SERVER['DOCUMENT_ROOT'].'/idea/models/members_model.php';

  $action = $_POST['action'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($action == 'create_user')
  {
    $email = $_POST['email'];
    $date = date("Y-m-d H:i:s");

    // called from models/members_model.php
    create_user($username, $password, $email, $date);

    header("Location: ../login.php");
    die();
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
    } else {
      echo "<br> LOGIN WAS UNSUCCESSFUL";
    }

    header("Location: ../index.php");
    die();
  }

  if ($_GET['logout'] != NULL)
  {
    logout();
  }
?>
