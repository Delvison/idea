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

    // called from lib/db_helper.php
    $created = send_query($query, $db_hostname, $db_user, $db_password,
    $members_db);

    if ($created){
      echo "Account successfully created.";
    } else {
      echo "Account not created.";
    }

    // TODO: check for errors in the query. for example, a username might
    // already exist
  }

  /**
  * Takes in a username and password and verifies that both match the record on
  * the database. Returns a boolean value indicating whether or not the login
  * was successful.
  * @param string $username Username that was given to the login page
  * @param string $password Password that was given to the login page
  * @author Delvison Castillo delvisoncastillo@gmail.com
  */
  function login_user($username, $password)
  {
    // global variables from db_config
    global $members_db_table;
    global $db_hostname;
    global $db_user;
    global $db_password;
    global $members_db;

    // query the database for the user's record
    $query = "SELECT * FROM $members_db_table WHERE username='$username';";
    $result = receive_query($query, $db_hostname, $db_user, $db_password,
    $members_db);

    // extract record from query
    $row = $result->fetch_array();

    // password and salt from the database
    $db_password = $row['password'];
    $db_salt = $row['salt'];

    // validate the password typed
    $logged_in = validateLogin($password, $db_password, $db_salt, 'sha1');

    return $logged_in;
  }


?>
