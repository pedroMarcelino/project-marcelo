<?php
    session_start();
    $code = $_SESSION['code'];
    if($_SESSION['code'] == ""){
        header("Location: ../login/login.php");
    }
    $code_user = $_GET['id'];
    include("../../asset/includes/conection.php");
    $sql = $conn->query("select * from user where cd_user = '$code_user'");
    $ret = $sql->fetch(PDO::FETCH_OBJ);

    $sul = "";
    $sud = "";
    $centro = "";
    $norte = "";
    $nord = "";
    $noro = "";

    switch($ret->reg_pais){
        case "sul ":
            $sul = "checked";
            break;
        case "sudeste ":
            $sud = "checked";
            break;
        case "centro-oeste ":
            $centro = "checked";
            break;
        case "norte ": 
            $norte  = "checked";
            break;
        case "nordeste ": 
            $nord  = "checked";
            break;
        case "noroeste ": 
            $noro  = "checked";
            break;
    }

    $cnjs = "";
    $cnjn = "";

    switch($ret->conj){
        case "sim":
            $cnjs = "checked";
            break;
        case "nao":
            $cnjn = "checked";
            break;
    }

    // var_dump($ret->reg_pais, $centro);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário - <?php echo $ret->nome;?></title>
    <link rel="AMM icon" href="../../asset/img/logo_AMM.png" >
    <?php include("../../asset/includes/links.php");?>
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="../../form/form.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <link href="../../asset/icons/css/all.css" rel="stylesheet">
</head>
<body>
    <header class="container-fluid">
        <?php include("../../asset/includes/navbar-viewuser.php") ?>  
    </header>
    <img src="../../asset/img/logo.png" class="img-index" alt="AMM - Adventist motorcycle ministry">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 center bg-black text-white">
                <h4>CADASTRO OFICIAL DE MEMBROS PARA O SISTEMA DO AMM BRASIL</h4>
            </div>
        </div>
        <form id="form">
        <div class="row mt-3">
            <div class="col-md-3 bd-black">
                <label class="mb-3 " for="input-regiao">Regional</label>
                <input type="text" class="form-control input-invisible" id="input-regiao" placeholder="Digite a região" value="<?php echo $ret->regional?>">
            </div>
            <div class="col-md-9 bd-black bdL ">
                <label class="mb-3 " for="reg.pais">Região do país</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="sul" name="reg.pais" value="sul" <?php echo $sul ?>>
                        <label class="radio-inline" for="sul">sul</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="sudeste" name="reg.pais" value="sudeste" <?php echo $sud ?> >
                        <label class="radio-inline" for="sudeste">Sudeste</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="centro-oeste" name="reg.pais" value="centro-oeste" <?php echo $centro ?> >
                        <label class="radio-inline" for="centro-oeste">Centro-oeste</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="norte" name="reg.pais" value="norte" <?php echo $norte ?> >
                        <label class="radio-inline" for="norte">Norte</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="nordeste" name="reg.pais" value="nordeste" <?php echo $nord ?> >
                        <label class="radio-inline" for="nordeste">Nordeste</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="noroeste" name="reg.pais" value="noroeste" <?php echo $noro ?> >
                        <label class="radio-inline" for="noroeste">Noroeste </label>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-9 bd-black">
                <label class="mb-4 " for="input-nome">Nome completo</label>
                <input type="text" class="form-control input-invisible validation"  id="input-nome" placeholder="Digite seu nome" value="<?php echo $ret->nm_completo?>" >
            </div>
            <div class="col-md-3 bd-black bdL ">
                <label class="mb-4 " for="input-nm-guerra">Nome de guerra/Apelido</label>
                <input type="text" class="form-control input-invisible "  id="input-nm-guerra" placeholder="Digite seu nome de guerra" value="<?php echo $ret->nm_guerra?>" >
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4 " for="input-rg">RG</label>
                <input type="text" class="form-control input-invisible" id="input-rg"  placeholder="Digite seu RG" value="<?php echo $ret->rg?>" >
            </div>

            <div class="col-md-3 bd-black bdL ">
                <label class="mb-4 " for="input-cpf">CPF</label>
                <input type="text" class="form-control input-invisible"  id="input-cpf" placeholder="Digite seu CPF" value="<?php echo $ret->cpf?>" >
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-cnh">CNH</label>
                <input type="text" class="form-control input-invisible" id="input-cnh"  placeholder="Digite sua CNH" value="<?php echo $ret->cnh?>" >
            </div>

            <div class="col-md-3 bd-black bdL">  
                <label class="mb-4 " for="input-venc-cnh">Vencimento CNH</label>
                <input type="text" class="form-control input-invisible" id="input-venc-cnh" placeholder="Digite o venc. da sua CNH" value="<?php echo $ret->venc_cnh?>">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4 " for="input-dt-nasc">Data de nascimento</label>
                <input type="text" class="form-control input-invisible" id="input-dt-nasc" value="<?php echo $ret->dt_nasc?>" >
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-natur">Naturalidade/Estado</label>
                <input type="text" class="form-control input-invisible" id="input-natur" placeholder="Digite sua nacionalidade/estado" value="<?php echo $ret->natu?>">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-naciona">Nacionalidade</label>
                <input type="text" class="form-control input-invisible" id="input-naciona" placeholder="Digite sua nacionalidade" value="<?php echo $ret->nacio?>">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-estado-civil">Estado civil</label>
                <input type="text" class="form-control input-invisible" id="input-estado-civil" placeholder="Digite seu estado civil" value="<?php echo $ret->est_civil?>">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-3 " for="conj.membro">Cônjuge é membro?</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="conjSim" name="conj.membro" value="sim" <?php echo $cnjs?>>
                        <label class="" for="conjSim">sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="conjNao" name="conj.membro" value="nao" <?php echo $cnjn?>>
                        <label class="" for="conjNao">Não</label>
                    </label>
                </div>
            </div>
            <div class="col-md-8 bd-black bdL">
                <label class="mb-4 " for="input-endereco">Endereço</label>
                <input type="text" class="form-control input-invisible" id="input-endereco" placeholder="Digite seu endereço" value="<?php echo $ret->enderc?> ">
            </div>
            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-nr">Nº</label>
                <input type="text" class="form-control input-invisible" id="input-nr" placeholder="Num." value="<?php echo $ret->num?> " >
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4 " for="input-apto">Apto. </label>
                <input type="text" class="form-control input-invisible" id="input-apto" placeholder="Num ap" value="<?php echo $ret->apto?> ">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-bairro">Bairro</label>
                <input type="text" class="form-control input-invisible" id="input-bairro" placeholder="Digite seu bairro" value="<?php echo $ret->bairro?> ">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-cep">CEP</label>
                <input type="text" class="form-control input-invisible" id="input-cep" placeholder="Digite seu CEP" value="<?php echo $ret->cep?> ">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-cid">Cidade</label>
                <input type="text" class="form-control input-invisible" id="input-cid" placeholder="Digite a cidade" value="<?php echo $ret->cidade?>" >
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-est">Estado</label>
                <input type="text" class="form-control input-invisible" id="input-est" placeholder="Estado" value="<?php echo $ret->estado?> ">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-9 bd-black">
                <label class="mb-4 " for="input-email">E-mail</label>
                <input type="text" class="form-control input-invisible" id="input-email" placeholder="Digite seu e-mail" disabled value="<?php echo $ret->email?> ">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-wpp">Fone/Whatsapp</label>
                <input type="text" class="form-control input-invisible" id="input-wpp" placeholder="Digite seu fone/whatsapp" value="<?php echo $ret->wpp?> ">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4 " for="input-religiao">Religião</label>
                <input type="text" class="form-control input-invisible" id="input-religiao" placeholder="Digite sua religião" value="<?php echo $ret->religiao?> ">
            </div>

            <div class="col-md-5 bd-black bdL">
                <label class="mb-4 " for="input-igr">Igreja que frequenta. Ex: Central/Nome do Bairro</label>
                <input type="text" class="form-control input-invisible" id="input-igr" placeholder="Digite a Igreja..." value="<?php echo $ret->igr_frenq?> "> 
            </div>

            <?php
            $pil = "";
            $gar = "";
            $simp = "";
                 switch($ret->categoria){
                    case "garupa":
                        $gar = "checked";
                        break;
                    case "piloto":
                        $pil = "checked";
                        break;
                    case "simpatizante":
                        $simp = "checked";
                        break;
                }
            ?>

            <div class="col-md-4 bd-black bdL">
                <label class="mb-3" for="categoria">Categoria</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="piloto" name="categoria" value="piloto" <?php echo $pil?>>
                        <label class="" for="piloto">Piloto</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="garupa" name="categoria" value="garupa" <?php echo $gar?>>
                        <label class="" for="garupa">Garupa</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="simpatizante" name="categoria" value="simpatizante" <?php echo $simp?>>
                        <label class="" for="simpatizante">Simpatizante</label>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4 " for="input-peso">Peso</label>
                <input type="text" class="form-control input-invisible"  id="input-peso" placeholder="Digite o Peso" value="<?php echo $ret->peso?> ">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-altura">Altura</label>
                <input type="text" class="form-control input-invisible" id="input-altura" placeholder="Digite sua altura" value="<?php echo $ret->altura?> ">
            </div>

            <div class="col-md-1 bd-black bdL">
                <label class="mb-4 " for="input-camisa">Camisa</label>
                <input type="text" class="form-control input-invisible"  id="input-camisa" placeholder="Número da camisa" value="<?php echo $ret->camisa?> ">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-calca">Calça</label>
                <input type="text" class="form-control input-invisible"  id="input-calca" placeholder="Número da calça" value="<?php echo $ret->calca?> ">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-calcado">Calçado</label>
                <input type="text" class="form-control input-invisible"  id="input-calcado" placeholder="Número do calçado" value="<?php echo $ret->tenis?> ">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-gInstrucao">Grau de Instrução</label>
                <input type="text" class="form-control input-invisible"  id="input-gInstrucao" placeholder="Grau de instrução" value="<?php echo $ret->grau_instr?> ">
            </div>
        </div>

        <?php

            $escs  = "";
            $escn = "";

            switch($ret->escudo){
                case "sim":
                    $escs = "checked";
                    break;
                case "nao":
                    $escn = "checked";
                    break;
            }
        ?>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-3" for="escudo">Escudo</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="escSim" name="escudo" value="sim" <?php echo $escs ?> >
                        <label class="" for="escSim">Sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="escNao" name="escudo" value="nao" <?php echo $escn ?>>
                        <label class="" for="escNao">Não</label>
                    </label>
                </div>
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-data-escudamento">Data escudamento</label>
                <input type="text" class="form-control input-invisible" id="input-data-escudamento" value="<?php echo $ret->dt_escudo?> "> 
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-sangue">Tipo sanguíneo</label>
                <input type="text" class="form-control input-invisible" id="input-sangue" placeholder="Tipo de sangue" value="<?php echo $ret->tp_sangue?>">
            </div>

            <?php
                $masc  = "";
                $fem = "";
    
                switch($ret->sexo){
                    case "masc":
                        $mesc = "checked";
                        break;
                    case "fem":
                        $fem = "checked";
                        break;
                }
            ?>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-3" for="sexo">Sexo</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="masc" name="sexo" value="masc" <?php echo $masc?>>
                        <label class="" for="masc">Masc</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="fem" name="sexo" value="fem" <?php echo $fem?>>
                        <label class="" for="fem">Fem</label>
                    </label>
                </div>
            </div>

            <?php
                $ds  = "";
                $dn = "";
    
                switch($ret->doador){
                    case "sim":
                        $ds = "checked";
                        break;
                    case "nao":
                        $dn = "checked";
                        break;
                }
            ?>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-3" for="doador">É doador de orgãos</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="doadorSim" name="doador" value="sim" <?php echo $ds?>>
                        <label class="" for="doadorSim">Sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="doadorNao" name="doador" value="nao" <?php echo $dn?>>
                        <label class="" for="doadorNao">Não</label>
                    </label>
                </div>
            </div>

        </div>

        <?php
            $vs  = "";
            $vn = "";

            switch($ret->vegetariano){
                case "sim":
                    $vs = "checked";
                    break;
                case "nao":
                    $vn = "checked";
                    break;
            }
        ?>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-3" for="veg">Vegetariano</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="vegSim" name="veg" value="sim" <?php echo $vs?>>
                        <label class="" for="veg.sim">Sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="vegNao" name="veg" value="nao" <?php echo $vn?>>
                        <label class="" for="veg.nao">Não</label>
                    </label>
                </div>
            </div>

            <div class="col-md-7 bd-black bdL">
                <label class="mb-4 " for="input-rest-alim">Restrição alimentar</label>
                <input type="text" class="form-control input-invisible"  id="input-rest-alim" placeholder="Alguma restriçao Alimentar ?" value="<?php echo $ret->rest_alim?>">
            </div>
            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-alergico">Alérgico a:</label>
                <input type="text" class="form-control input-invisible"  id="input-alergico" placeholder="Alérgico" value="<?php echo $ret->alerg?>">
            </div>
        </div>
        

        <div class="row">
            <div class="col-md-12 mt-3 center bg-black text-white">
                <h4>DADOS DA MOTOCICLETA</h4>
            </div>
        </div>
    
        <div class="row mt-3">
            <div class="col-md-2 bd-black">
                <label class="mb-4 " for="input-marca">Marca</label>
                <input type="text" class="form-control input-invisible"  id="input-marca" placeholder="Digite a marca"  value="<?php echo $ret->marca?>">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-modelo">Modelo</label>
                <input type="text" class="form-control input-invisible"  id="input-modelo" placeholder="Digite o modelo"  value="<?php echo $ret->modelo?>">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-ano">Ano</label>
                <input type="text" class="form-control input-invisible"  id="input-ano" placeholder="Digite o ano"  value="<?php echo $ret->ano?>">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-cilindrada">Cilindrada</label>
                <input type="text" class="form-control input-invisible"  id="input-cilindrada" placeholder="Digite a cilindrada" value="<?php echo $ret->cilindrada?>">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-cor">Cor</label>
                <input type="text" class="form-control input-invisible"  id="input-cor" placeholder="Digite a cor"  value="<?php echo $ret->cor?>">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-placa">Placa</label>
                <input type="text" class="form-control input-invisible"  id="input-placa" placeholder="Digite a placa"  value="<?php echo $ret->placa?>">
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="">
                <input type="checkbox" name="declaracao" id="declaracao" checked>
            </div>
            <div class="col-md-11">
                <p id="declaracao">Declaro serem verdadeiras todas as informações acima. Assumundo a responsabilidade pelas mesmas.</p>
            </div>
        </div>
        

        <div class="row mt-5">
            <div class="col-md-4 line-assinatura">
                Local e data
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 line-assinatura">
                Assinatura
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-max center">
                <h4>TERMO DE COMPROMISSO</h4>            
            </div>
        </div>

        <div class="row mt-4">
            <p><i class="fas fa-angle-right"></i> Fazer parte do MINISTÉRIO MOTOCICLÍSTICO AMM BRASIL é um privilégio que
             exige responsabilidade. Como membro, declaro estar ciente das normas descritas no Estatuto Social, 
            Regimento Interno, Manual da Marca e Manual do Uniforme e, caso venha a infrigi-las, sei que estarei 
            sujeito a disciplina e sanções previstas nestes documentos.</p>    

            <p><i class="fas fa-angle-right"></i> Prometo honrar o nome de Cristo, cumprindo os preceitos bíblicos e honrando 
            o nome da Igreja Adventista do 7º Dia estampados em meu colete.</p>

            <p><i class="fas fa-angle-right"></i> Declaro que darei o meu melhor para respeitar e cumprir com os propósitos pelo qual o AMM foi criado.</p>

            <p><i class="fas fa-angle-right"></i> Prometo honrar o Código Biker e cumprir o Estatuto Social, Regimento Interno, Manual da Marca, Manual do 
            Uniforme, Manual de Conduta, e demais diretrizes, respeitando os irmãos de colete do meu grupo e de estrada, 
            a liderança local, estadual e nacional do AMM.</p>

            <p><i class="fas fa-angle-right"></i> Prometo obedecer e cumprir as leis de trânsito, bem como promover a paz e a harmonia nas viagens,
            encontros e no circulo de amigos.</p>

            <p><i class="fas fa-angle-right"></i> Estou ciente que o escudo, colete e a bandeira, são símbolos máximos no motoclubismo.
             Caso me desligue, independente do motivo, concordo em devolver os escudos do meu colete a diretoria regional.</p>

            <p><i class="fas fa-angle-right"></i> Assumoa mensalidade no valor de R$ <input type="text"  class="input-line" name="vl_mensalidade" id="vl_mensalidade" value="<?php echo $ret->vl_mensalid?>"> e estou ciente que a falta do pagamento
             poderá gerar sanções e disciplinas.</p>

            <p><i class="fas fa-angle-right"></i> Participarei assiduamente das reuniões, passeios e projetos que a regional promover.</p>

            <p><i class="fas fa-angle-right"></i> Usareio uniforme adequado conforme as orientações do Manual do Uniforme.</p>

            <p><i class="fas fa-angle-right"></i> Como Membro, fortalecerei este Ministério e promoverei a harmonia e união entre os colegas e respeitareia hierarquia.</p>

            <p><i class="fas fa-angle-right"></i> Assumo o valor de R$ 100,00 referente a taxa de adesão que pagarei para a tesouraria REGIONAL
             que deverá fazer o repasse à tesouraria NACIONAL.</p>

            <p><i class="fas fa-angle-right"></i> Enquanto uniformizado, seguirei os preceitos da IASD.</p>

            <p><i class="fas fa-angle-right"></i> Estou ciente que o AMM Brasil em sua totalidade, é composto por membros participantes em regime de voluntariado,
            sem nenhuma remuneração e que tenha recursos para sua manutenção pessoal, familiar e de sua motocicleta.</p>

            <div class="row">
                <div class="col-md-12 mt-max center">
                    <h4>AUTORIZAÇÃO/CESSÃO DE DIREITOS</h4>            
                </div>
            </div>

            <div class="row mt-4">
                <p><i class="fas fa-angle-right"></i> Autorizo ao AMM Brasile suas regionais a utilização de minha voz/imagem para fins de divulgação das atividades 
                realizadas, considerando a veiculação em impressos, página de internet, mídias sociais, meios de comunicação e vídeos
                institucionais que vierem a ser produzidos.</p>    

                <p> Por ser verdade, assino o presente, assumindo quaisquer responsabilidade pela não veracidade destas informações.</p>
            </div>
        </div>

        <div class="row mt-max">
            <div class="col-md-4 line-assinatura">
                Local e data
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 line-assinatura">
                Assinatura
            </div>
        </div>
        </form>
        <div class="row  mt-5">
            <div class="col-md-3">
                <button id="imprimir" class="btn btn-outline-primary"><i class="fas fa-print"></i> Imprimir</button>
            </div>
        </div>
    </div>
    </div>

    <script src="form.js"></script>    
</body>
</html>