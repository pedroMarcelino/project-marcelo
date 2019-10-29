<?php
    session_start();
    $code = $_SESSION['code'];
    include("../../asset/includes/conection.php");
    $sql = $conn->query("select * from user where cd_user != '$code'");
    ?>
<!-- <div class="row mt-5"> -->
<table class="table table-striped mt-5 table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">RG</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($ret = $sql->fetch(PDO::FETCH_OBJ)){
    ?>
    
    <tr>
        <th class="war-name"><?php echo $ret->nm_guerra?></th>
        <td><?php echo $ret->wpp?></td>
        <td><?php echo $ret->email?></td>
        <td><?php echo $ret->rg?></td>
    </tr>
    <?php
        }
    ?>
    </tbody>
</table>

</div>

<script src="function/ret-user.js"></script>