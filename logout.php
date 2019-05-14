<?php
session_start();
  //unset session ID, session still active though -should we destroy it?
  print_r($_SESSION);
  echo 'Session = ' . session_id();
  unset($_SESSION['username'], $_SESSION['pwd']);
  

  header("Location: index.php");
  
?>