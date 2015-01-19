<?php

  include $_SERVER['DOCUMENT_ROOT'].'/idea/lib/db_helper.php';
  include $_SERVER['DOCUMENT_ROOT'].'/idea/config/db_config.php';

  /**
  * This function is respnosible for creating likes
  * @author Regis
  */
  function create_like($idea_id, $user_liked){
    // global variables from config/db_config.php
    global $ideas_db_table;
    global $db_hostname;
    global $db_user;
    global $db_password;
    global $idea_db;

    //date format
    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO likes(id,idea_id,user_liked,date_created) values('NULL','$'"

    return send_query($query, $db_hostname, $db_user, $db_password, $db_use);
  }

  function rem  /**
  * This function is respnosible for removing likes
  * @author Regis
  */
  ove_like($like_id){
    // global variables from config/db_config.php
    global $ideas_db_table;
    global $db_hostname;
    global $db_user;
    global $db_password;
    global $idea_db;
  }


?>
