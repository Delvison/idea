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
		// TODO: finish
		// successful idea deletion
		// redirect
	}
	else
	{
		// TODO: finish
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
			// TODO: finish
			// successful idea creation
			// redirect
		}
		else
		{
			// TODO: finish
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
		// TODO: finish
		// successfully updated
		// redirect
	}
	else
	{
		// TODO: finish
		// update failed
		// redirect
	}
}

?>
