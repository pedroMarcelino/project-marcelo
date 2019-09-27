<?php
    session_start();

    $_SESSION['codigo']=="" ? header("Location: login/login.php") : header("Location: index/index.php"); 