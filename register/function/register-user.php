<?php
    include("../../asset/includes/conection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $password = md5($password);

    $sql = $conn->prepare("select * from user where email = '$email'");
    $sql->execute();
    $row = $sql->rowCount();

    if($row > 0){
        $array = array(
            "return"=> "email_invalid",
        );

        echo json_encode($array);
    }else{

        $sql = $conn->prepare("insert into user(cd_user, email, pass, nome, tipo) values(null, '$email','$password','$name', 1)");
        $return_sql = $sql->execute();
        
        if($return_sql){
            $array = array(
                "return"=> TRUE,
            );
        
            echo json_encode($array);
        
        }else{
            
            $array = array(
                "return"=> FALSE,
            );
        
            echo json_encode($array);
        }
    }