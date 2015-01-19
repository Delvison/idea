<?php
  // checks if a user is logged in
  include $_SERVER['DOCUMENT_ROOT'].'/idea/models/members_model.php';
  check_login();
?>

<html>

  <body>
    <form action="controllers/like_controller.php" method="POST">
      <input style="display:none" name="action" value="create_like" />
      <input style="display:none" name="idea_id" value="1" />
      <input style="display:none" name="user_liked" value="<?php echo $_SESSION['username']; ?>" />
      <button type="submit"> Like </button>
    </form>
  </body>

</html>
