<?php
    session_start();
    $code = $_SESSION['code'];
    if($_SESSION['code'] == ""){
        header("Location: ../login/login.php");
    }
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
    <title>Bem Vindo, <?php echo $ret->nome;?></title>
    <link rel="AMM icon" href="../asset/img/logo.png" >
    <?php include("../asset/includes/links.php");?>
    <link rel="stylesheet" href="index.css">
    <script src="return.js"></script>
</head>
<body>
    <img src="../asset/img/logo.png" class="img-index" alt="AMM - Adventist motorcycle ministry">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 center bg-black text-white">
                <h4>CADASTRO OFICIAL DE MEMBROS PARA O SISTEMA DO AMM BRASIL</h4>
            </div>
        </div>
        <div id="dados"></div>
    </div>

  
</body>
</html>