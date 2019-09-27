<?php
    include("../../asset/includes/conection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $password = md5($password);


    $sql = $conn->prepare("insert into user values(null, '$name','$email','$password')");
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