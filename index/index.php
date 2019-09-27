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
    <title>Bem Vindo, <?php echo $ret->nm_user;?></title>
    <link rel="AMM icon" href="../asset/img/logo.png" >
    <?php include("../asset/includes/links.php");?>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <img src="../asset/img/logo.png" class="img-index" alt="AMM - Adventist motorcycle ministry">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-4 center bg-black text-white">
                <h4>CADASTRO OFICIAL DE MEMBROS PARA O SISTEMA DO AMM BRASIL</h4>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3 bd-black">
                <label class="mb-4" for="">Regional</label>
                <input type="text" class="form-control input-invisible" id="input-email" placeholder="Digite a região">
            </div>
            <div class="col-md-9 bd-black mgL-px ">
                <label class="mb-4" for="">Região do país</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sul" name="sul">
                        <label class="custom-control-label" for="sul">sul</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sudeste" name="sudeste">
                        <label class="custom-control-label" for="sudeste">Sudeste</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="centro-oeste" name="centro-oeste">
                        <label class="custom-control-label" for="centro-oeste">Centro-oeste</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="norte" name="norte">
                        <label class="custom-control-label" for="norte">Norte</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="nordeste" name="nordeste">
                        <label class="custom-control-label" for="nordeste">Nordeste</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="noroeste" name="noroeste">
                        <label class="custom-control-label" for="noroeste">Noroeste </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 bd-black mgT-px">
                <label class="mb-4" for="">Nome completo</label>
                <input type="text" class="form-control input-invisible" id="input-email" placeholder="Digite seu nome">
            </div>
            <div class="col-md-3 bd-black mgL-px mgT-px">
                <label class="mb-4" for="">Nome de guerra/Apelido</label>
                <input type="text" class="form-control input-invisible" id="input-email" placeholder="Digite seu nome">
            </div>
        </div>


    </div>
</body>
</html>