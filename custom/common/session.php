<?php

  session_start();
  $login_user = $_SESSION['login_user'];
  if ($login_user != 'root') {
      header("Location: login.php"); 
      return;
  }
?>
