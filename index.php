<?php
  session_id('mySessionID');
  session_start();
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
  <div class="example">
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
        <!-- <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#"></a></li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
          <?php
            if (!isset($_SESSION['username']))
            {
              echo '<li><a href="login.php">Login</a></li>';
            } else{
              echo "<li>".$_SESSION['username']."</li> ";
              echo '  <a href="controllers/login_controller.php'.
              '?logout=true">Logout</a>';
            }
          ?>
        </ul>
      </div>
    </nav>
  </div>
  <!-- NAVBAR END -->

  <!-- MAIN -->
  <div class="hero-unit example">
    <center>
      <h1> Welcome to Idea! </h1>
    </center>
    <div class="row-fluid" style="margin-top:15px">
      <div class="span4">
        Lorem ipsum dolor sit amet, duo ut alii vocibus. Pro oratio explicari in, te vis partem nostrum. Cu qui sensibus argumentum, et quo utinam epicurei, no mea aeterno voluptatum intellegebat. Nam suas viris eu, fugit graeci eloquentiam vel an. Vix ut ubique
        eloquentiam, ne congue appareat duo, ad mea illum appareat contentiones. Nullam referrentur adversarium quo ne, hinc invidunt signiferumque sit eu, tantas partem equidem eu duo. Id facer nominavi vix, graeci sanctus ne sed.
      </div>
      <div class="span4">
        Lorem ipsum dolor sit amet, duo ut alii vocibus. Pro oratio explicari in, te vis partem nostrum. Cu qui sensibus argumentum, et quo utinam epicurei, no mea aeterno voluptatum intellegebat. Nam suas viris eu, fugit graeci eloquentiam vel an. Vix ut ubique
        eloquentiam, ne congue appareat duo, ad mea illum appareat contentiones. Nullam referrentur adversarium quo ne, hinc invidunt signiferumque sit eu, tantas partem equidem eu duo. Id facer nominavi vix, graeci sanctus ne sed.
      </div>
      <div class="span4">
        Lorem ipsum dolor sit amet, duo ut alii vocibus. Pro oratio explicari in, te vis partem nostrum. Cu qui sensibus argumentum, et quo utinam epicurei, no mea aeterno voluptatum intellegebat. Nam suas viris eu, fugit graeci eloquentiam vel an. Vix ut ubique
        eloquentiam, ne congue appareat duo, ad mea illum appareat contentiones. Nullam referrentur adversarium quo ne, hinc invidunt signiferumque sit eu, tantas partem equidem eu duo. Id facer nominavi vix, graeci sanctus ne sed.
      </div>
    </div>
  </div>
  <!-- MAIN END-->

  <!--FOOTER-->

  <div class="example footer">
    <hr /> Idea 2015
  </div>
  <!--END FOOTER-->
</body>

</html>
