<?php
/**
* Controller script responsible for handling CRUD operations for
* comments.
* @author Delvison Castillo delvisoncastillo@gmail.com
*/

include $_SERVER['DOCUMENT_ROOT'].'/idea/models/comments_model.php';

$action = $_POST['action'];
$comment = $_POST['comment'];
$idea_id = $_POST['idea_id'];
$user = $_POST['user'];

if ($action == 'create_comment')
{

}

if ($action == 'delete_comment')
{

}

if ($action == 'update_comment')
{

}

?>
