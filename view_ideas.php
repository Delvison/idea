<?php
  include $_SERVER['DOCUMENT_ROOT'].'/idea/models/members_model.php';
  check_login();
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
  </head>

  <body>
    <!-- NAVBAR -->
    <div class="page">
      <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand">Idea</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="view_ideas.php">Ideas</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php
            if (!isset($_SESSION['username']))
            {
              echo '<li><a href="login.php">Login</a></li>';
            } else{
              echo '<li><div style="margin-top:10px"><div style="padding-right:10px">'.$_SESSION['username']."</div></li> ";
              echo '  <li><a href="controllers/login_controller.php'.
              '?logout=true">Logout</a></div></li>';
            }
            ?>
          </ul>
        </div>
      </nav>
    </div>
    <!-- NAVBAR END -->

    <!-- BODY START -->
    <div class="page container-fluid ">
      <div class="row-fluid">
        <div id="sidebar" class="span3">
          <aside class="sidebar">
            <h2>Sidebar?</h2>
            <ul>
              <li>Whatever?</li>
              <li>Man?</li>
            </ul>
          </aside>
        </div>
        <div id="center-stage" class="span7 center-stage">
          <div class="block">
            Lorem ipsum dolor sit amet, duo ut alii vocibus. Pro oratio explicari in, te vis partem nostrum. Cu qui sensibus argumentum, et quo utinam epicurei, no mea aeterno voluptatum intellegebat. Nam suas viris eu, fugit graeci eloquentiam vel an. Vix ut ubique
            eloquentiam, ne congue appareat duo, ad mea illum appareat contentiones. Nullam referrentur adversarium quo ne, hinc invidunt signiferumque sit eu, tantas partem equidem eu duo. Id facer nominavi vix, graeci sanctus ne sed.
          </div>
          <div class="block">
            Lorem ipsum dolor sit amet, duo ut alii vocibus. Pro oratio explicari in, te vis partem nostrum. Cu qui sensibus argumentum, et quo utinam epicurei, no mea aeterno voluptatum intellegebat. Nam suas viris eu, fugit graeci eloquentiam vel an. Vix ut ubique
            eloquentiam, ne congue appareat duo, ad mea illum appareat contentiones. Nullam referrentur adversarium quo ne, hinc invidunt signiferumque sit eu, tantas partem equidem eu duo. Id facer nominavi vix, graeci sanctus ne sed.
          </div>
        </div>
      </div>
    </div>
    <!-- BODY END -->

    <!--FOOTER-->
    <div class="page footer">
      <hr /> Idea 2015
    </div>
    <!--END FOOTER-->


  </body>
</html>
