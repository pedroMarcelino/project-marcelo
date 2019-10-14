<?php
    include("../../asset/includes/conection.php");  

    $code = $_POST['cd'];
    
    $sql = $conn->prepare("UPDATE user SET tipo = '1' WHERE cd_user = '$code'");
    $ret = $sql->execute();

    if($ret){
        $msg = array(
            "msg" => TRUE,
        );
        echo json_encode($msg);
    }else{
        $msg = array(
            "msg" => FALSE,
        );
        echo json_encode($msg);
    }