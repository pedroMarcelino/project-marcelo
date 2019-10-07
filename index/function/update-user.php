<?php 
    session_start();
    include('../../asset/includes/conection.php');

    $cod = $_SESSION['code'];
    
    $reg = $_POST['reg'];
    $reg_pais = $_POST['reg_pais'];
    $nm = $_POST['nm'];
    $nm_g = $_POST['nm_g'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $cnh = $_POST['cnh'];
    $v_cnh = $_POST['v_cnh'];
    $dt_n = $_POST['dt_n'];
    $nat = $_POST['nat'];
    $nac = $_POST['nac'];
    $estC = $_POST['estC'];
    $conj = $_POST['conj'];
    $end = $_POST['end'];
    $nr = $_POST['nr'];
    $apto = $_POST['apto'];
    $bair = $_POST['bair'];
    $cep = $_POST['cep'];
    $cid = $_POST['cid'];
    $est = $_POST['est'];
    $email = $_POST['email'];
    $wpp = $_POST['wpp'];
    $relg = $_POST['relg'];
    $igr = $_POST['igr'];
    $catg = $_POST['catg'];
    $pes = $_POST['pes'];
    $alt = $_POST['alt'];
    $camis = $_POST['camis'];
    $calca = $_POST['calca'];
    $tenis = $_POST['tenis'];
    $g_inst = $_POST['g_inst'];
    $escu = $_POST['escu'];
    $dt_esc = $_POST['dt_esc'];
    $sang = $_POST['sang'];
    $sex = $_POST['sex'];
    $doad = $_POST['doad'];
    $veg = $_POST['veg'];
    $rest_ali = $_POST['rest_ali'];
    $alerg = $_POST['alerg'];
    $marc = $_POST['marc'];
    $mod = $_POST['mod'];
    $ano = $_POST['ano'];
    $cilin = $_POST['cilin'];
    $cor = $_POST['cor'];
    $plac = $_POST['plac'];
    $dec = $_POST['reg'];
    $vl_mens = $_POST['vl_mens'];
    $tenis = $_POST['tenis'];

    $sql = $conn->prepare("UPDATE user SET regional='$reg',reg_pais='$reg_pais ',nm_completo='$nm ',nm_guerra='$nm_g',rg='$rg',cpf='$cpf',cnh='$cnh',venc_cnh='$v_cnh',dt_nasc='$dt_n',natu='$nat',nacio='$nac',
    est_civil='$estC',conj='$conj',enderc='$end',num='$nr',apto='$apto',bairro='$bair',cep='$cep',cidade='$cid',estado='$est',email='$email',wpp='$wpp',religiao='$relg',igr_frenq='$igr',categoria='$catg',
    peso='$pes',altura='$alt',camisa='$camis',calca='$calca',grau_instr='$g_inst',escudo='$escu',dt_escudo='$dt_esc',tp_sangue='$sang',sexo='$sex',doador='$doad',vegetariano='$veg',rest_alim='$rest_ali',alerg='$alerg',
    marca='$marc',modelo='$mod',ano='$ano',cilindrada='$cilin',cor='$cor',placa='$plac', declaro='$dec', vl_mensalid='$vl_mens', tenis='$tenis' WHERE cd_user = '$cod' ");

    $return = $sql->execute();

    if($return){
        $array = array(
            "return" => TRUE,
        );
        echo json_encode($array);
    }else{
        $array = array(
            "return" => FALSE,
        );
        echo json_encode($array);
    }
    
    // $sql_email = $conn->prepare("select nome from user where cd_user = '$cod'");
    // $sql_email->execute();

    // $email = $sql_email->fetch(PDO::FETCH_OBJ);
    
    // $to = "marceloesposito@me.com"; 
    // $assunto = "Cadastro  via AMM";
    // $menssagem = "O $email->nome, acabou de efetuar um cadatro"
    // $menssagem = ("Nome: " . $email->nome . "\n" . "Email: " . $email . "\n\n" . $menssagem);
    // $menssagem = str_replace("\n.", "\n..", $menssagem);