<?php
    session_start();
    $code = $_SESSION['code'];
    if($_SESSION['code'] == ""){
        header("Location: ../login/login.php");
    }
    include("../asset/includes/conection.php");
    $sql = $conn->query("select * from user where cd_user = '$code'");
    $ret = $sql->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo, <?php echo $ret->nm_user;?></title>
    <link rel="AMM icon" href="../asset/img/logo.png" >
    <?php include("../asset/includes/links.php");?>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <img src="../asset/img/logo.png" class="img-index" alt="AMM - Adventist motorcycle ministry">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 center bg-black text-white">
                <h4>CADASTRO OFICIAL DE MEMBROS PARA O SISTEMA DO AMM BRASIL</h4>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3 bd-black">
                <label class="mb-3" for="">Regional</label>
                <input type="text" class="form-control input-invisible" id="input-regiao" placeholder="Digite a região">
            </div>
            <div class="col-md-9 bd-black bdL ">
                <label class="mb-3" for="">Região do país</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sul" name="rag.pais">
                        <label class="custom-control-label" for="sul">sul</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sudeste" name="rag.pais">
                        <label class="custom-control-label" for="sudeste">Sudeste</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="centro-oeste" name="rag.pais">
                        <label class="custom-control-label" for="centro-oeste">Centro-oeste</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="norte" name="rag.pais">
                        <label class="custom-control-label" for="norte">Norte</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="nordeste" name="rag.pais">
                        <label class="custom-control-label" for="nordeste">Nordeste</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="noroeste" name="rag.pais">
                        <label class="custom-control-label" for="noroeste">Noroeste </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-9 bd-black">
                <label class="mb-4" for="">Nome completo</label>
                <input type="text" class="form-control input-invisible" id="input-nome" placeholder="Digite seu nome">
            </div>
            <div class="col-md-3 bd-black bdL ">
                <label class="mb-4" for="">Nome de guerra/Apelido</label>
                <input type="text" class="form-control input-invisible" id="input-nm-guerra" placeholder="Digite seu nome de guerra">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4" for="">RG</label>
                <input type="text" class="form-control input-invisible" id="input-rg" placeholder="Digite seu RG">
            </div>

            <div class="col-md-3 bd-black bdL ">
                <label class="mb-4" for="">CPF</label>
                <input type="text" class="form-control input-invisible" id="input-cpf" placeholder="Digite seu CPF">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">CNH</label>
                <input type="text" class="form-control input-invisible" id="input-cnh" placeholder="Digite sua CNH">
            </div>

            <div class="col-md-3 bd-black bdL">  
                <label class="mb-4" for="">Vencimento CNH</label>
                <input type="text" class="form-control input-invisible" id="input-venc-cnh" placeholder="Digite o venc. da sua CNH">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4" for="">Data de nascimento</label>
                <input type="date" class="form-control input-invisible" id="input-dt-nasc">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Naturalidade/Estado</label>
                <input type="text" class="form-control input-invisible" id="input-natur" placeholder="Digite sua nacionalidade/estado">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Nacionalidade</label>
                <input type="text" class="form-control input-invisible" id="input-naciona" placeholder="Digite sua nacionalidade">
            </div>
            <div class="col-md-4 bd-black bdL">
                <label class="mb-4" for="">Estado civil</label>
                <input type="text" class="form-control input-invisible" id="input-estado-civil" placeholder="Digite seu estado civil">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4" for="">Cônjuge é membro?</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sim" name="conj.membro">
                        <label class="custom-control-label" for="sim">sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="nao" name="conj.membro">
                        <label class="custom-control-label" for="nao">Não</label>
                    </div>
                </div>
            </div>
            <div class="col-md-10 bd-black bdL">
                <label class="mb-4" for="">Endereço</label>
                <input type="text" class="form-control input-invisible" id="input-endereco" placeholder="Digite seu endereço">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-1 bd-black">
                <label class="mb-4" for="">Nº</label>
                <input type="number" class="form-control input-invisible" id="input-nr" placeholder="Num.">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Apto. </label>
                <input type="number" class="form-control input-invisible" id="input-apto" placeholder="Num ap">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Bairro</label>
                <input type="text" class="form-control input-invisible" id="input-bairro" placeholder="Digite seu bairro">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">CEP</label>
                <input type="number" class="form-control input-invisible" id="input-cep" placeholder="Digite seu CEP">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Cidade</label>
                <input type="text" class="form-control input-invisible" id="input-cid" placeholder="Digite a cidade">
            </div>

            <div class="col-md-1 bd-black bdL">
                <label class="mb-4" for="">Estado</label>
                <input type="text" class="form-control input-invisible" id="input-est" placeholder="Estado">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-9 bd-black">
                <label class="mb-4" for="">E-mail</label>
                <input type="text" class="form-control input-invisible" id="input-email" placeholder="Digite seu e-mail">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Fone/Whatsapp</label>
                <input type="text" class="form-control input-invisible" id="input-wpp" placeholder="Digite seu fone/whatsapp">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4" for="">Religião</label>
                <input type="text" class="form-control input-invisible" id="input-religiao" placeholder="Digite sua religião">
            </div>

            <div class="col-md-5 bd-black bdL">
                <label class="mb-4" for="">Igreja que frequenta. Ex: Central/Nome do Bairro</label>
                <input type="text" class="form-control input-invisible" id="input-igr" placeholder="Digite a Igreja...">
            </div>

            <div class="col-md-4 bd-black bdL">
                <label class="mb-4" for="">Categoria</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="piloto" name="categoria">
                        <label class="custom-control-label" for="piloto">Piloto</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="garupa" name="categoria">
                        <label class="custom-control-label" for="garupa">Garupa</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="simpatizante" name="categoria">
                        <label class="custom-control-label" for="simpatizante">Simpatizante</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4" for="">Peso</label>
                <input type="text" class="form-control input-invisible" id="input-peso" placeholder="Digite o Peso">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Altura</label>
                <input type="text" class="form-control input-invisible" id="input-altura" placeholder="Digite sua altura">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Camisa</label>
                <input type="text" class="form-control input-invisible" id="input-camisa" placeholder="Número da camisa">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Calça</label>
                <input type="text" class="form-control input-invisible" id="input-calca" placeholder="Número da calça">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Calçado</label>
                <input type="text" class="form-control input-invisible" id="input-calcado" placeholder="Número do calçado">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Grau de Instrução</label>
                <input type="text" class="form-control input-invisible" id="input-gInstrucao" placeholder="Grau de instrução">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4" for="">Escudo</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="esc.sim" name="escudo">
                        <label class="custom-control-label" for="esc.nao">Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="esc.nao" name="escudo">
                        <label class="custom-control-label" for="esc.nao">Não</label>
                    </div>
                </div>
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Data escudamento</label>
                <input type="date" class="form-control input-invisible" id="input-data-escudamento">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Tipo sanguíneo</label>
                <input type="text" class="form-control input-invisible" id="input-camisa" placeholder="Tipo de sangue">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4" for="">Sexo</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sex.masc" name="sexo">
                        <label class="custom-control-label" for="esc.nao">Masc</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="sex.fem" name="sexo">
                        <label class="custom-control-label" for="sex.fem">Fem</label>
                    </div>
                </div>
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">É doador de orgãos</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="doador.sim" name="doador">
                        <label class="custom-control-label" for="esc.nao">Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="doador.nao" name="doador">
                        <label class="custom-control-label" for="sex.fem">Não</label>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4" for="">Vegetariano</label>
                <div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="veg.sim" name="veg">
                        <label class="custom-control-label" for="esc.nao">Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="veg.nao" name="veg">
                        <label class="custom-control-label" for="sex.fem">Não</label>
                    </div>
                </div>
            </div>

            <div class="col-md-7 bd-black bdL">
                <label class="mb-4" for="">Restrição alimentar</label>
                <input type="text" class="form-control input-invisible" id="input-rest-alim" placeholder="Alguma restriçao Alimentar ?">
            </div>
            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Alérgico a:</label>
                <input type="text" class="form-control input-invisible" id="input-alergico" placeholder="Alérgico">
            </div>
        </div>
        

        <div class="row">
            <div class="col-md-12 mt-3 center bg-black text-white">
                <h4>DADOS DA MOTOCICLETA</h4>
            </div>
        </div>
    
        <div class="row mt-3">
            <div class="col-md-2 bd-black">
                <label class="mb-4" for="">Marca</label>
                <input type="text" class="form-control input-invisible" id="input-marca" placeholder="Digite a marca">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Modelo</label>
                <input type="text" class="form-control input-invisible" id="input-modelo" placeholder="Digite o modelo">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Ano</label>
                <input type="text" class="form-control input-invisible" id="input-ano" placeholder="Digite o ano">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Cilindrada</label>
                <input type="text" class="form-control input-invisible" id="input-cilindrada" placeholder="Digite a cilindrada">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Cor</label>
                <input type="text" class="form-control input-invisible" id="input-cor" placeholder="Digite a cor">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4" for="">Placa</label>
                <input type="text" class="form-control input-invisible" id="input-placa" placeholder="Digite a placa">
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="">
                <input type="checkbox" name="declaracao" id="declaracao">
            </div>
            <div class="col-md-11">
                <p>Declaro serem verdadeiras todasw as informações acima. Assumundo a responsabilidade pelas mesmas.</p>
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

            <p><i class="fas fa-angle-right"></i> Assumoa mensalidade no valor de R$ <input type="text" class="input-line" name="" id=""> e estou ciente que a falta do pagamento
             poderá gerar sanções e disciplinas.</p>

            <p><i class="fas fa-angle-right"></i> asdadasdas</p>


        </div>
    </div>
</body>
</html>