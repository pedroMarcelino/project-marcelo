<?php 
    session_start();
    $_SESSION['code']== "" ? header("Location: ../login/login.php") : $_SESSION['code']; 
    $code = $_SESSION['code'];
    include("../asset/includes/conection.php");
    $sql = $conn->query("select * from user where cd_user = '$code'");
    $ret = $sql->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários AMM </title>
    <link rel="AMM icon" href="../asset/img/logo.png" >
    <?php include("../asset/includes/links.php");?>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <header>
        <?php $ret->tipo == 1? include("../asset/includes/navbar.php") : include("../asset/includes/navbar-adm.php") ;?>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="return"></div>
            </div>
        </div>
    </div>

    <script src="user.js"></script>
</body>
</html>