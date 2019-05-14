<?php
session_start();

?>

<!DOCTYPE html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="rules.css">
  <link rel="stylesheet" href="materialize.css">
  <title>Index-RatePresentations</title>
  <html lang="de">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
  <header>
    <nav class="topnav">
      <div class="container">

        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
          <li><a href="team.php"><i class="material-icons left">people</i>Team</a></li>
          <li><a href="about.php"><i class="material-icons left">web</i>Project</a></li>

          
          <?php
        
        if (isset($_SESSION['username']) && isset($_SESSION['pwd'])) : ?>
            <?php if ($_SESSION['isteacher'] == TRUE) : ?>
            <li><a href="teacher.php"><i class="material-icons left">account_circle</i>Teacher Area</a></li>
          <?php else : ?>
            <li><a href="students.php"><i class="material-icons left">account_circle</i>Student Area</a></li>
          <?php
        endif;
        ?>
        <li><a href="logout.php"><i class="material-icons left">power_settings_new</i>Logout</a></li>
        <?php
        else :
          ?>
            <li><a href="login.php"><i class="material-icons left">subdirectory_arrow_right</i>Login</a></li>
          <?php endif; ?>

        </ul>
        <a href="index.php" class="center-align">Rate Presentations</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php" class="valign-wrapper"><i class="material-icons left">home</i>Home</a></li>
          <li><a href="team.php" class="valign-wrapper"><i class="material-icons left">people</i>Team</a></li>
          <li><a href="about.php" class="valign-wrapper"><i class="material-icons left">web</i>Project</a></li>



          
          <?php 
        if (isset($_SESSION['username']) && isset($_SESSION['pwd'])) : ?>
            <li><a href="logout.php" class="right valign-wrapper"><i class="material-icons left">power_settings_new</i>Logout</a></li>
            <?php if ($_SESSION['isteacher'] == TRUE) : ?>
            <li><a href="teacher.php" class="btn-floating grey darken-4 z-depth-3 center"><i class="material-icons">account_circle</i></a></li>

          <?php else : ?>
            <li><a href="students.php" class="btn-floating yellow darken-4 z-depth-3 center "><i class="material-icons">account_circle</i></a></li>
        <?php endif; ?>
          <?php
        else :
          ?>
            <li><a href="login.php"  class="valign-wrapper"><i class="material-icons left">subdirectory_arrow_right</i>Login</a></li>
          <?php endif; ?>




        </ul>
      </div>
    </nav>
  </header>

  <!--<section class="content">-->
  <div class="parallax-container">
    <br><br>
    <?php $link = $_SERVER['REQUEST_URI'];

    if ($link === "/semesterwork/login.php") : ?>
      <h2 class="header center">Please Login</h2>

    <?php elseif ($link === "/semesterwork/index.php") : ?>
      <h2 class="header center">Rate Presentations</h2>

    <?php elseif ($link === "/semesterwork/index.php") : ?>
      <h2 class="header center">Our Team</h2>

    <?php elseif ($link === "/semesterwork/about.php") : ?>
      <h2 class="header center">About this Project</h2>

    <?php elseif ($link === "/semesterwork/team.php") : ?>
      <h2 class="header center">Team</h2>

    <?php endif; ?>

    <div class="row center">
      <div class="parallax"><img src="parallax4.jpg">
      </div>
    </div>
  </div>