<?php
  /**
  * Controller script responsible for handling likes.
  * @author regis **/

  require $_SERVER['DOCUMENT_ROOT'].'/idea/models/likes_model.php';

  $action = $_POST['action'];

  echo $action;

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
    // receive the idea id
    $idea_id = $_POST['idea_id'];

    if ( remove_like($idea_id) )
    {
      //TODO:redirect appropriately after success
      header("Location:test_like.php");
      die();
    }
    else
    {
      header("Location:../view_ideas.php?error=unlike_not_set");
      die();
    }

  }

?>
