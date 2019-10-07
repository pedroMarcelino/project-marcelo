<?php
    session_start();

    $_SESSION['code']=="" ? header("Location: login/login.php") : header("Location: index/index.php"); 