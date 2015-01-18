<?php
/**
* Controller script responsible for handling likes.
 @regis **/
$username="suny";
$password="suny";
$hostname="54.149.232.134"

//connection to the database

$dbhandle=new mysqli($hostname,$username,$password,"idea_db");

//$query="SELECT * FROM likes"

$result=$dbhandle->query("SELECT * FROM likes");
mysqli_query($dbhandle,"INSERT INTO likes(id,idea_id,user_liked,date_created) values('NULL','$'

?>
