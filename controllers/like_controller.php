<?php
/**
* Controller script responsible for handling likes.
* @author regis **/

$action = $_POST['action'];

if ($action == 'create_like')
{
  // receive the idea id
  $idea_id = $_POST['idea_id'];

  // get the user who liked the idea
  $user_liked = $_POST['user_liked'];

  // attempt to set the like. redirect view appropriately
  if ( create_like($idea_id, $user_liked) )
  {
    // TODO: redirect appropiately after success
    header("Location:index.php");
    die();
  } else {
    header("Location: ../view_ideas.php?error=like_not_set");
    die();
  }
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
