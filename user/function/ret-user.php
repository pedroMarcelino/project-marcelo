<div class="row mt-5">
    <?php
        include("../../asset/includes/conection.php");
        $sql = $conn->query("select * from user");

        while($ret = $sql->fetch(PDO::FETCH_OBJ)){
    ?>
    <div class="col-md-4 mt-2">
        <div class="card">
                <div class="col-12">
                    <a href="function/view-user.php?id=<?php echo $ret->cd_user?>"><button class="btn btn-outline-primary btn-block"><i class="fas fa-eye"></i> Visializar Info</button></a>
                </div>
            <div class="row mt-3">
                <div class="col-4">
                    <p class="war-name"><?php $ret->nm_guerra == ""? print"---" :print $ret->nm_guerra;?></p>
                </div>
                <div class="col-8">
                    <p><?php $ret->wpp == ""? print"---" :print $ret->wpp;?></p>
                </div>
                <div class="col-12">
                    <p><?php echo $ret->nome?> / <?php echo $ret->email?></p>
                </div>
                <div class="col-12 mt-2">
                    <p><?php $ret->rg == ""? print"---" :print $ret->rg; ?></p>
                </div>
            </div>
            <div class="btns<?php echo $ret->cd_user?>">
                <div class="row">
                    <div class="col-6">
                        <button id="btns<?php echo $ret->cd_user?>" class="btn btn2 btn-outline-danger btn-block"><i class="fas fa-times"></i> Excluir</button>
                    </div>
                    <?php
                        if($ret->tipo == 1){
                    ?>
                    <div class="col-6">
                        <button id="adm<?php echo $ret->cd_user?>" class="btn btn-outline-primary btn-block btn-block btn-adm"><i class="fas fa-user-plus"></i>Tornar Admin</button>
                    </div>
                    <?php
                        }else if ($ret->tipo == 2){
                    ?>
                    <div class="col-6">
                        <button id="adm<?php echo $ret->cd_user?>" class="btn btn-outline-warning btn-block btn-block btn-user"><i class="fas fa-user-minus"></i>Tornar Usu.</button>
                    </div>        
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="hidden" id="conf_btn<?php echo $ret->cd_user?>">
                <div class="row">
                    <div class="col-6">
                        <button id="btn<?php echo $ret->cd_user?>" class="btn btn-outline-success btn-block btn-conf"><i class="fas fa-check"></i></button>
                    </div>
                    <div class="col-6">
                        <button id="btn_ancor<?php echo $ret->cd_user?>" class="btn btn-outline-danger btn-block btn-cancel"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        }
    ?>
</div>

<script src="function/ret-user.js"></script>