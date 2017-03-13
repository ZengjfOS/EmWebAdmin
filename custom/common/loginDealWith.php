<?php
    // just allow username=root passwd=aplex to login
    if ($_GET['username'] != 'root' || $_GET['passwd'] != 'aplex') {
        // jump to login.php
        header("Location: login.php");
        return;
    }

    // put username=root to session
    session_start();
    $_SESSION['login_user']=$_GET['username']; 

    // jump to index.php
    header("Location: index.php");
?>
