<?php 
    session_start();
    include('../asset/includes/conection.php');
    $code = $_SESSION['code'];

    $sql = $conn->query("select * from user where cd_user = '$code'");
    $ret = $sql->fetch(PDO::FETCH_OBJ);

    echo json_encode($ret);