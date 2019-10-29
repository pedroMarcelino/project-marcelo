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
    <title>Bem Vindo, <?php echo $ret->nome?></title>
    <link rel="AMM icon" href="../asset/img/logo.png" >
    <?php include("../asset/includes/links.php");?>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <?php $ret->tipo == 1? include("../asset/includes/navbar.php") : include("../asset/includes/navbar-adm.php") ;?>
    </header>
    <div class="container">
        <div class="row">   
            <div class="col-md-3">
                <a class="link-none" href="../form/form.php"><div class="box center">
                    <p class="">Meu Formulário</p>
                    <i class="far fa-file-alt wd-more"></i>
                </div></a>
            </div>
            <div class="col-md-3">
                <a class="link-none" href="../user/user.php"><div class="box center">
                    <p class="">Listar Usuários</p>
                    <i class="fas fa-users wd-more"></i>
                </div></a>
            </div>
        </div>
    </div>
</body>
</html>