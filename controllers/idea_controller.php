<?php
include $_SERVER['DOCUMENT_ROOT'].'/idea/models/ideas_model.php';

/**
* Controller script responsible for handling CRUD operations for
* ideas posted.
* @author nuwan
*/

$action = $_POST['action'];

if ( $action == ' delete_idea')
{
	$idea_id = $_POST['idea_id'];
	if ( remove_idea($idea_id))
	{
		// successful idea deletion
		// redirect 
	}
	else
	{
		// unsuccessful idea deletion
		// redirect
	}
}

else
{
	$idea = $_POST['idea'];

	if ($action == 'create_idea')
	{
		$idea_id = $POST['idea_id'];
		$user_posted = $POST['user'];

		if(create_idea($idea_id, $user_posted, $idea))
		{
			// successful idea creation
			// redirect
		}
		else
		{
			// unsuccessful idea creation
			// redirect
		}
	}
}

if ($action == 'update_idea')
{
  $idea = $_POST['idea'];

	$idea_id = $_POST['idea_id'];
	if (update_idea($idea_id, $idea))
	{
		// successfully updated
		// redirect
	}
	else
	{
		// update failed
		// redirect
	}
}

?>
