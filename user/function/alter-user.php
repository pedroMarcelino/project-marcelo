<?php
    session_start();
    include("../../asset/includes/conection.php");  

    $code = $_POST['cd'];
    $code_master = $_SESSION['code'];
    
    $sql = $conn->prepare("UPDATE user SET tipo = '1' WHERE cd_user = '$code'");
    $ret = $sql->execute();

    if($code == $code_master){
        $igual = TRUE;
    }else{
        $igual = FALSE;
    }

    if($ret){
        $msg = array(
            "msg" => TRUE,
            "igual" => $igual,
        );
        echo json_encode($msg);
    }else{
        $msg = array(
            "msg" => FALSE,
        );
        echo json_encode($msg);
    }