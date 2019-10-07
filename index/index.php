<?php 
    session_start();
    $_SESSION['code']== "" ? header("Location: ../login/login.php") : $_SESSION['code']; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo, </title>
    <link rel="AMM icon" href="../asset/img/logo.png" >
    <?php include("../asset/includes/links.php");?>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <?php include("../asset/includes/navbar.php");?>
    </header>
    
</body>
</html>