<?php
     session_start();
     $code = $_SESSION['code'];
     include("../../asset/includes/conection.php");
?>

<h2 class="mt-5">usuários</h2>
<?php
    $sql = $conn->query("select * from user where cd_user != '$code' and tipo = 1");
    $ret_user =  $sql->rowCount();

    if($ret_user > 0){
?>

<table class="table table-striped mt-2 table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">RG</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($ret = $sql->fetch(PDO::FETCH_OBJ)){
    ?>
    
    <tr>
        <th class="war-name"><?php $ret->nm_guerra == ""? print "---": print $ret->nm_guerra;?></th>
        <td><?php $ret->wpp == ""? print "---": print $ret->wpp ;?></td>
        <td><?php echo $ret->email?></td>
        <td><?php $ret->rg == ""? print "---": print $ret->rg;?></td>
        <td class="btns<?php echo $ret->cd_user?>">
            <div class="row">
                <div class="col-md-4">
                    <button id="btns<?php echo $ret->cd_user?>" class="btn btn2 btn-outline-danger btn-block"><i class="fas fa-times"></i> Excluir</button>
                </div>
                <div class="col-md-6">
                    <button id="adm<?php echo $ret->cd_user?>" class="btn btn-outline-primary btn-block btn-block btn-adm"><i class="fas fa-user-plus"></i>Tornar Admin</button>
                </div>
                <div class="col-md-2">
                    <a href="function/view-user.php?id=<?php echo $ret->cd_user?>"><i class="far fa-clipboard form-icon"></i></a>
                </div>
            </div> 
        </td>
        <td class="hidden" id="conf_btn<?php echo $ret->cd_user?>">
            <div class="row">
                <div class="col-md-5">
                    <button id=btn_conf<?php echo $ret->cd_user?> class="btn btn-conf btn-outline-success btn-cont btn-block"><i class="fas fa-check"></i></button>
                </div>
                <div class="col-md-5">
                    <button id="btn_ancor<?php echo $ret->cd_user?>" class="btn btn-outline-danger btn-cont btn-block btn-cancel"><i class="fas fa-times"></i></button>  
                </div>
            </div>
        </td>
    </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<?php
    } else{
        ?>
        <div class="alert alert-warning mt-2" role="alert">
           Nenhum usuário cadastrado!
        </div>
        <?php
    }
?>

<h2 class="mt-5">Administradores</h2>
<?php
    $sql = $conn->query("select * from user where cd_user != '$code' and tipo = 2");
    $ret_user =  $sql->rowCount();

    if($ret_user > 0){
?>

<table class="table table-striped mt-2 table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">RG</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($ret = $sql->fetch(PDO::FETCH_OBJ)){
    ?>
    
    <tr>
        <th class="war-name"><?php $ret->nm_guerra == ""? print "---": print $ret->nm_guerra;?></th>
        <td><?php $ret->wpp == ""? print "---": print $ret->wpp ;?></td>
        <td><?php echo $ret->email?></td>
        <td><?php $ret->rg == ""? print "---": print $ret->rg;?></td>
        <td class="btns<?php echo $ret->cd_user?>">
            <div class="row">
                <div class="col-md-4">
                    <button id="btns<?php echo $ret->cd_user?>" class="btn btn2 btn-outline-danger btn-block"><i class="fas fa-times"></i> Excluir</button>
                </div>
                <div class="col-md-6">
                    <button id="adm<?php echo $ret->cd_user?>" class="btn btn-outline-warning btn-block btn-block btn-user"><i class="fas fa-user-minus"></i>Tornar Usu.</button>
                </div>
                <div class="col-md-2">
                    <a href="function/view-user.php?id=<?php echo $ret->cd_user?>"><i class="far fa-clipboard form-icon"></i></a>
                </div>
            </div> 
        </td>
        <td class="hidden" id="conf_btn<?php echo $ret->cd_user?>">
            <div class="row">
                <div class="col-md-5">
                    <button id=btn_conf<?php echo $ret->cd_user?> class="btn btn-conf btn-outline-success btn-cont btn-block"><i class="fas fa-check"></i></button>
                </div>
                <div class="col-md-5">
                    <button id="btn_ancor<?php echo $ret->cd_user?>" class="btn btn-outline-danger btn-cont btn-block btn-cancel"><i class="fas fa-times"></i></button>  
                </div>
            </div>
        </td>
    </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<?php
    } else{
        ?>
        <div class="alert alert-warning mt-2" role="alert">
           Nenhum administrador cadastrado!
        </div>
        <?php
    }
?>

</div>

<script src="function/ret-user.js"></script>