<?php
/**
* This script defines all functions responsible for dealing with the user model.
*/

  include $_SERVER['DOCUMENT_ROOT'].'/idea/lib/passwd.php';
  include $_SERVER['DOCUMENT_ROOT'].'/idea/lib/error_reporing.php';
  include $_SERVER['DOCUMENT_ROOT'].'/idea/lib/db_helper.php';
  include $_SERVER['DOCUMENT_ROOT'].'/idea/config/db_config.php';

  /**
  * Creates a user in the database.
  * @param string $username Desired username
  * @param string $username Desired username
  * @param string $password Desired password
  * @param string $email User's email
  * @param string $date Date of creation
  * @author Delvison Castillo delvisoncastillo@gmail.com
  */
  function create_user($username, $password, $email, $date)
  {
    // global variables from db_config
    global $members_db_table;
    global $db_hostname;
    global $db_user;
    global $db_password;
    global $members_db;

    // generate salt and hashed password
    $salt = randomSalt();
    $hash = create_hash($password, 'sha1', $salt);

    $query = "INSERT INTO $members_db_table (id, username, email, password,".
    " salt, created_dt) VALUES".
    " ('NULL','$username','$email','$hash','$salt','$date');";

    send_query($query, $db_hostname, $db_user, $db_password, $members_db);

    // TODO: check for errors in the query. for example, a username might
    // already exist
  }

  /**
  * Creates a user in the database.
  * @param string $username Desired username for password lookup
  * @author Delvison Castillo delvisoncastillo@gmail.com
  */
  // function get_password($username)
  // {
  //   $query = "SELECT FROM $members_db WHERE username='$username'";
  //   return receive_query($query, $db_hostname, $db_user, $db_password, $db_use);
  // }


?>
