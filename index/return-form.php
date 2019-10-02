<?php 
    session_start();
    include('../asset/includes/conection.php');
    $code = $_SESSION['code'];

    $sql = $conn->query("select * from user where cd_user = '$code'");
    $ret = $sql->fetch(PDO::FETCH_OBJ);
?>


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
                        <input type="radio" class="" id="sul" name="reg.pais" value="sul">
                        <label class="radio-inline" for="sul">sul</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="sudeste" name="reg.pais" value="sudeste">
                        <label class="radio-inline" for="sudeste">Sudeste</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="centro-oeste" name="reg.pais" value="centro-oeste">
                        <label class="radio-inline" for="centro-oeste">Centro-oeste</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="norte" name="reg.pais" value="norte">
                        <label class="radio-inline" for="norte">Norte</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="nordeste" name="reg.pais" value="nordeste">
                        <label class="radio-inline" for="nordeste">Nordeste</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="noroeste" name="reg.pais" value="noroeste">
                        <label class="radio-inline" for="noroeste">Noroeste </label>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-9 bd-black">
                <label class="mb-4 " for="input-nome">Nome completo</label>
                <input type="text" class="form-control input-invisible validation" value="<?php echo $ret->nm_completo ?>" id="input-nome" placeholder="Digite seu nome">
            </div>
            <div class="col-md-3 bd-black bdL ">
                <label class="mb-4 " for="input-nm-guerra">Nome de guerra/Apelido</label>
                <input type="text" class="form-control input-invisible " value="<?php echo $ret->nm_guerra ?>" id="input-nm-guerra" placeholder="Digite seu nome de guerra">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4 " for="input-rg">RG</label>
                <input type="text" class="form-control input-invisible" id="input-rg" value="<?php echo $ret->rg ?>" placeholder="Digite seu RG">
            </div>

            <div class="col-md-3 bd-black bdL ">
                <label class="mb-4 " for="input-cpf">CPF</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->cpf ?>" id="input-cpf" placeholder="Digite seu CPF">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-cnh">CNH</label>
                <input type="text" class="form-control input-invisible" id="input-cnh" value="<?php echo $ret->cnh?>" placeholder="Digite sua CNH">
            </div>

            <div class="col-md-3 bd-black bdL">  
                <label class="mb-4 " for="input-venc-cnh">Vencimento CNH</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->venc_cnh ?>" id="input-venc-cnh" placeholder="Digite o venc. da sua CNH">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4 " for="input-dt-nasc">Data de nascimento</label>
                <input type="date" class="form-control input-invisible" id="input-dt-nasc">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-natur">Naturalidade/Estado</label>
                <input type="text" class="form-control input-invisible" id="input-natur" value="<?php echo $ret->natu ?>" placeholder="Digite sua nacionalidade/estado">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-naciona">Nacionalidade</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->nacio ?>" id="input-naciona" placeholder="Digite sua nacionalidade">
            </div>
            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-estado-civil">Estado civil</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->est_civil ?>" id="input-estado-civil" placeholder="Digite seu estado civil">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-3 " for="conj.membro">Cônjuge é membro?</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="sim" name="conj.membro" value="sim">
                        <label class="" for="sim">sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="nao" name="conj.membro" value="nao">
                        <label class="" for="nao">Não</label>
                    </label>
                </div>
            </div>
            <div class="col-md-8 bd-black bdL">
                <label class="mb-4 " for="input-endereco">Endereço</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->enderc?>" id="input-endereco" placeholder="Digite seu endereço">
            </div>
            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-nr">Nº</label>
                <input type="number" class="form-control input-invisible" value="<?php echo $ret->num ?>" id="input-nr" placeholder="Num.">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4 " for="input-apto">Apto. </label>
                <input type="number" class="form-control input-invisible" value="<?php echo $ret->apto ?>" id="input-apto" placeholder="Num ap">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-bairro">Bairro</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->bairro ?>" id="input-bairro" placeholder="Digite seu bairro">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-cep">CEP</label>
                <input type="number" class="form-control input-invisible" value="<?php echo $ret->cep?>" id="input-cep" placeholder="Digite seu CEP">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-cid">Cidade</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->cidade ?> " id="input-cid" placeholder="Digite a cidade">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-est">Estado</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->estado ?> "id="input-est" placeholder="Estado">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-9 bd-black">
                <label class="mb-4 " for="input-email">E-mail</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->email ?> "id="input-email" placeholder="Digite seu e-mail">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-wpp">Fone/Whatsapp</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->wpp ?> "id="input-wpp" placeholder="Digite seu fone/whatsapp">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-4 " for="input-religiao">Religião</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->religiao ?>" id="input-religiao" placeholder="Digite sua religião">
            </div>

            <div class="col-md-5 bd-black bdL">
                <label class="mb-4 " for="input-igr">Igreja que frequenta. Ex: Central/Nome do Bairro</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->igr_frenq ?> "id="input-igr" placeholder="Digite a Igreja...">
            </div>

            <div class="col-md-4 bd-black bdL">
                <label class="mb-3" for="categoria">Categoria</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="piloto" name="categoria" value="piloto">
                        <label class="" for="piloto">Piloto</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="garupa" name="categoria" value="garupa">
                        <label class="" for="garupa">Garupa</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="simpatizante" name="categoria" value="simpatizante">
                        <label class="" for="simpatizante">Simpatizante</label>
                    </label>
                </div>
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-4 " for="input-peso">Peso</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->peso?> "id="input-peso" placeholder="Digite o Peso">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-altura">Altura</label>
                <input type="text" class="form-control input-invisible"value="<?php echo $ret->altura ?> "id="input-altura" placeholder="Digite sua altura">
            </div>

            <div class="col-md-1 bd-black bdL">
                <label class="mb-4 " for="input-camisa">Camisa</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->camisa ?> "id="input-camisa" placeholder="Número da camisa">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-calca">Calça</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->calca ?> "id="input-calca" placeholder="Número da calça">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-calcado">Calçado</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->tenis ?>  "id="input-calcado" placeholder="Número do calçado">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-gInstrucao">Grau de Instrução</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->grau_instr ?> "id="input-gInstrucao" placeholder="Grau de instrução">
            </div>
        </div>

        <div class="row mgT-px">
            <div class="col-md-2 bd-black">
                <label class="mb-3" for="escudo">Escudo</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="esc.sim" name="escudo" value="sim">
                        <label class="" for="esc.sim">Sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="esc.nao" name="escudo" value="nao">
                        <label class="" for="esc.nao">Não</label>
                    </label>
                </div>
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-4 " for="input-data-escudamento">Data escudamento</label>
                <input type="date" class="form-control input-invisible" id="input-data-escudamento">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-sangue">Tipo sanguíneo</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->tp_sangue ?>" id="input-sangue" placeholder="Tipo de sangue">
            </div>

            <div class="col-md-3 bd-black bdL">
                <label class="mb-3" for="sexo">Sexo</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="masc" name="sexo" value="masc">
                        <label class="" for="masc">Masc</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="fem" name="sexo" value="fem">
                        <label class="" for="fem">Fem</label>
                    </label>
                </div>
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-3" for="doador">É doador de orgãos</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="doador.sim" name="doador" value="sim">
                        <label class="" for="doador.sim">Sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="doador.nao" name="doador" value="nao">
                        <label class="" for="doador.nao">Não</label>
                    </label>
                </div>
            </div>

        </div>

        <div class="row mgT-px">
            <div class="col-md-3 bd-black">
                <label class="mb-3" for="veg">Vegetariano</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" class="" id="veg.sim" name="veg" value="sim">
                        <label class="" for="veg.sim">Sim</label>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="" id="veg.nao" name="veg" value="nao">
                        <label class="" for="veg.nao">Não</label>
                    </label>
                </div>
            </div>

            <div class="col-md-7 bd-black bdL">
                <label class="mb-4 " for="input-rest-alim">Restrição alimentar</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->rest_alim ?>" id="input-rest-alim" placeholder="Alguma restriçao Alimentar ?">
            </div>
            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-alergico">Alérgico a:</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->alerg ?>" id="input-alergico" placeholder="Alérgico">
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
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->marca ?>" id="input-marca" placeholder="Digite a marca">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-modelo">Modelo</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->modelo ?>" id="input-modelo" placeholder="Digite o modelo">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-ano">Ano</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->ano ?>" id="input-ano" placeholder="Digite o ano">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-cilindrada">Cilindrada</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->cilindrada ?>" id="input-cilindrada" placeholder="Digite a cilindrada">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-cor">Cor</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->cor ?>" id="input-cor" placeholder="Digite a cor">
            </div>

            <div class="col-md-2 bd-black bdL">
                <label class="mb-4 " for="input-placa">Placa</label>
                <input type="text" class="form-control input-invisible" value="<?php echo $ret->placa?>" id="input-placa" placeholder="Digite a placa">
            </div>
        </div>
        
        <div class="row mt-2">
            <div class="">
                <input type="checkbox" name="declaracao">
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

            <p><i class="fas fa-angle-right"></i> Assumoa mensalidade no valor de R$ <input type="text" value="<?php echo $ret->vl_mensalid ?> class="input-line" name="vl_mensalidade" id="vl_mensalidade"> e estou ciente que a falta do pagamento
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
                <button id="enviar" class="btn btn-outline-success"><i class="far fa-paper-plane"></i> Enviar</button>
                <button id="imprimir" class="btn btn-outline-primary"><i class="fas fa-print"></i> Imprimir</button>
            </div>
        </div>
    </div>

    <script src="index.js"></script>