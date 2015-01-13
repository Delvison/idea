<?php
  include 'lib/passwd.php';
  include 'lib/error_reporing.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $salt = randomSalt();
  $hash = create_hash($password, 'sha1', $salt);
  echo $hash;
  echo '<br>'.$salt;
?>
