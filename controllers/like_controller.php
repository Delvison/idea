<?php
/**
* Controller script responsible for handling likes.
* @author regis **/

$action = $_POST['action'];

if ($action == 'create_like')
{
  function create_like($idea_id,$user_liked)
  {
  // global variables from config/db_config.php
  global $ideas_db_table;
  global $db_hostname;
  global $db_user;
  global $db_password;
  global $idea_db;

  //date format
  $date = date("Y-m-d H:i:s");
  $query = "INSERT INTO likes(id,idea_id,user_liked,date_created) values('NULL','$idea_id','$user_liked','$date')";
  return send_query($query, $db_hostname, $db_user, $db_password, $db_use);
  }
  header("Location:like.php");
  die();
}
else
{
  echo "<br> CHECK YOUR CONNECTION";
  header("Location: ../like.php?error=404_not_found");
  die();
}

  /**
* This function is responsible for removing likes
* @author Regis
*/
if ($action == 'remove_like')
{
  function remove_like($like_id)
  {
  // global variables from config/db_config.php
  global $ideas_db_table;
  global $db_hostname;
  global $db_user;
  global $db_password;
  global $idea_db;
  $query = "DELETE FROM likes WHERE likes . id='$like_id'";
  return send_query($query, $db_hostname, $db_user, $db_password, $db_use);
  }
  header("Location:removelike.php")
  die();
}
else
{
  echo "<br> CHECK YOUR CONNECTION";
  header("Location: ../removelike.php?error=404_not_found");
  die();
}

?>
