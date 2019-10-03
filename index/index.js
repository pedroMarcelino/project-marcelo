$(function () {
    var maskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';
    },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(maskBehavior.apply({}, arguments), options);
            }
        };


    return_form();
    $('#input-rg').mask('00.000.000-A');
    $('#input-cpf').mask('000.000.000-00');
    $('#input-cnh').mask('00000000000');
    $('#input-venc-cnh').mask('00/00');
    $('#input-dt-nasc').mask('00/00/0000');
    $('#input-nr').mask('00000000');
    $('#input-apto').mask('00000000');
    $('#input-cep').mask('00000-000');
    $('#input-wpp').mask(maskBehavior, options);
    $('#input-peso').mask('000,0', { reverse: true });
    $('#input-altura').mask('0,00');
    $('#input-camisa').mask('000');
    $('#input-calca').mask('000');
    $('#input-calcado').mask('000');
    $('#input-data-escudamento').mask('00/00/0000');
    $('#input-ano').mask('0000');
    $('#input-placa').mask('AAA-0000');
    $('#vl_mensalidade').mask('000.000.000.000.000,00', { reverse: true });

    $("#enviar").click(function () {
        console.log(validation_field())
        if (validation_field() == 45) {
            if (declaracao()) {

                var dados = {
                    "reg": $("#input-regiao").val(),
                    "reg_pais": $("input[name='reg.pais']:checked").val(),
                    "nm": $("#input-nome").val(),
                    "nm_g": $("#input-nm-guerra").val(),
                    "rg": $("#input-rg").val(),
                    "cpf": $("#input-cpf").val(),
                    "cnh": $("#input-cnh").val(),
                    "v_cnh": $("#input-venc-cnh").val(),
                    "dt_n": $("#input-dt-nasc").val(),
                    "nat": $("#input-natur").val(),
                    "nac": $("#input-naciona").val(),
                    "estC": $("#input-estado-civil").val(),
                    "conj": $("input[name='conj.membro']:checked").val(),
                    "end": $("#input-endereco").val(),
                    "nr": $("#input-nr").val(),
                    "apto": $("#input-apto").val(),
                    "bair": $("#input-bairro").val(),
                    "cep": $("#input-cep").val(),
                    "cid": $("#input-cid").val(),
                    "est": $("#input-est").val(),
                    "email": $("#input-email").val(),
                    "wpp": $("#input-wpp").val(),
                    "relg": $("#input-religiao").val(),
                    "igr": $("#input-igr").val(),
                    "catg": $("input[name='categoria']:checked").val(),
                    "pes": $("#input-peso").val(),
                    "alt": $("#input-altura").val(),
                    "camis": $("#input-camisa").val(),
                    "calca": $("#input-calca").val(),
                    "tenis": $("#input-calcado").val(),
                    "g_inst": $("#input-gInstrucao").val(),
                    "escu": $("input[name='escudo']:checked").val(),
                    "dt_esc": $("#input-data-escudamento").val(),
                    "sang": $("#input-sangue").val(),
                    "sex": $("input[name='sexo']:checked").val(),
                    "doad": $("input[name='doador']:checked").val(),
                    "veg": $("input[name='veg']:checked").val(),
                    "rest_ali": $("#input-rest-alim").val(),
                    "alerg": $("#input-alergico").val(),
                    "marc": $("#input-marca").val(),
                    "mod": $("#input-modelo").val(),
                    "ano": $("#input-ano").val(),
                    "cilin": $("#input-cilindrada").val(),
                    "cor": $("#input-cor").val(),
                    "plac": $("#input-placa").val(),
                    "dec": $("input[name='declaracao']:checked").val(),
                    "vl_mens": $("#vl_mensalidade").val(),
                }

                console.table(dados)

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'function/update-user.php',
                    data: dados,
                    success: function (data) {
                        if (data.return) {
                            swal("Eba!", "Executado com sucesso", "success");
                            return_form();
                        } else {
                            swal("Opss!", "Não foi possivel executar, desculpe", "error");
                        }
                    }
                });
            } else {
                swal("EEIH", "Você precisa declarar que tudo é verdade!", "warning");
            }
        } else {
            swal("EEIH", "Você esqueceu algum campo verifique!", "warning");
        }
    });

    function return_form() {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'return-form.php',
            data: '',
            success: function (data) {
                console.table(data);

                $("#input-regiao").val(data.regional)
                switch (data.reg_pais) {
                    case "sul ":
                        $('#sul').prop('checked', 'checked');
                        break;
                    case "sudeste ":
                        $('#sudeste').prop('checked', 'checked');
                        break;
                    case "centro-oeste ":
                        $('#centro-oeste').prop('checked', 'checked');
                        break;
                    case "norte ":
                        $('#norte').prop('checked', 'checked');
                        break;
                    case "nordeste ":
                        $('#nordeste').prop('checked', 'checked');
                        break;
                    case "noroeste ":
                        $('#noroeste').prop('checked', 'checked');
                        break;
                }
                $("#input-nome").val(data.nm_completo);
                $("#input-nm-guerra").val(data.nm_guerra);
                $("#input-rg").val(data.rg);
                $("#input-cpf").val(data.cpf);
                $("#input-cnh").val(data.cnh);
                $("#input-venc-cnh").val(data.venc_cnh);
                $("#input-dt-nasc").val(data.dt_nasc);
                $("#input-natur").val(data.natu);
                $("#input-naciona").val(data.nacio);
                $("#input-estado-civil").val(data.est_civil);

                switch (data.conj) {
                    case "sim":
                        // alert("entrei");
                        $('#conjSim').prop('checked', 'checked');
                        break;
                    case "nao":
                        $('#conjNao').prop('checked', 'checked');
                        break;
                }

                $("#input-endereco").val(data.enderc);
                $("#input-nr").val(data.num);
                $("#input-apto").val(data.apto);
                $("#input-bairro").val(data.bairro);
                $("#input-cep").val(data.cep);
                $("#input-cid").val(data.cidade);
                $("#input-est").val(data.estado);
                $("#input-email").val(data.email);
                $("#input-wpp").val(data.wpp);
                $("#input-religiao").val(data.religiao);
                $("#input-igr").val(data.igr_frenq);

                switch (data.categoria) {
                    case "piloto":
                        $('#conjNao').prop('checked', 'checked');
                        break;
                    case "garupa":
                        $('#garupa').prop('checked', 'checked');
                        break;
                    case "simpatizante":
                        $('#simpatizante').prop('checked', 'checked');
                        break;
                }

                $("#input-peso").val(data.peso);
                $("#input-altura").val(data.altura);
                $("#input-camisa").val(data.camisa);
                $("#input-calca").val(data.calca);
                $("#input-calcado").val(data.tenis);
                $("#input-gInstrucao").val(data.grau_instr);

                switch (data.escudo) {
                    case "sim":
                        $('#escSim').prop('checked', 'checked');
                        break;
                    case "nao":
                        $('#escNao').prop('checked', 'checked');
                        break;
                }

                $("#input-data-escudamento").val(data.dt_escudo);
                $("#input-sangue").val(data.tp_sangue);

                switch (data.sexo) {
                    case "masc":
                        $('#masc').prop('checked', 'checked');
                        break;
                    case "fem":
                        $('#fem').prop('checked', 'checked');
                        break;
                }

                switch (data.doador) {
                    case "sim":
                        $('#doadorSim').prop('checked', 'checked');
                        break;
                    case "nao":
                        $('#doadorNao').prop('checked', 'checked');
                        break;
                }

                switch (data.vegetariano) {
                    case "sim":
                        $('#vegSim').prop('checked', 'checked');
                        break;
                    case "nao":
                        $('#vegNao').prop('checked', 'checked');
                        break;
                }

                $("#input-rest-alim").val(data.rest_alim);
                $("#input-alergico").val(data.alerg);
                $("#input-marca").val(data.marca);
                $("#input-modelo").val(data.modelo);
                $("#input-ano").val(data.ano);
                $("#input-cilindrada").val(data.cilindrada);
                $("#input-cor").val(data.cor);
                $("#input-placa").val(data.placa);
                $("#vl_mensalidade").val(data.vl_mensalid);

                $('#declaracao').prop('checked', 'checked');

            }
        });
    }

    $("#imprimir").click(function () {
        window.print();
    });

    $("#input-regiao").keypress(function () {
        $("label[for=input-regiao]").attr("class", "mb-3 sucess show");
    });

    $("#input-nome").keypress(function () {
        $("label[for=input-nome]").attr("class", "mb-3 sucess show");
    });

    $("#input-rg").keypress(function () {
        $("label[for=input-rg]").attr("class", "mb-3 sucess show");
    });

    $("#input-cnh").keypress(function () {
        $("label[for=input-cnh]").attr("class", "mb-3 sucess show");
    });

    $("#input-cpf").keypress(function () {
        $("label[for=input-cpf]").attr("class", "mb-3 sucess show");
    });

    $("#input-venc-cnh").keypress(function () {
        $("label[for=input-venc-cnh]").attr("class", "mb-3 sucess show");
    });

    $("#input-dt-nasc").keypress(function () {
        $("label[for=input-dt-nasc]").attr("class", "mb-3 sucess show");
    });

    $("#input-nm-guerra").keypress(function () {
        $("label[for=input-nm-guerra]").attr("class", "mb-3 sucess show");
    });

    $("#input-natur").keypress(function () {
        $("label[for=input-natur]").attr("class", "mb-3 sucess show");
    });

    $("#input-naciona").keypress(function () {
        $("label[for=input-naciona]").attr("class", "mb-3 sucess show");
    });

    $("#input-estado-civil").keypress(function () {
        $("label[for=input-estado-civil]").attr("class", "mb-3 sucess show");
    });

    $("#input-endereco").keypress(function () {
        $("label[for=input-endereco]").attr("class", "mb-3 sucess show");
    });

    $("#input-nr").keypress(function () {
        $("label[for=input-nr]").attr("class", "mb-3 sucess show");
    });

    $("#input-bairro").keypress(function () {
        $("label[for=input-bairro]").attr("class", "mb-3 sucess show");
    });

    $("#input-cep").keypress(function () {
        $("label[for=input-cep]").attr("class", "mb-3 sucess show");
    });

    $("#input-cid").keypress(function () {
        $("label[for=input-cid]").attr("class", "mb-3 sucess show");
    });

    $("#input-est").keypress(function () {
        $("label[for=input-est]").attr("class", "mb-3 sucess show");
    });

    $("#input-email").keypress(function () {
        $("label[for=input-email]").attr("class", "mb-3 sucess show");
    });

    $("#input-wpp").keypress(function () {
        $("label[for=input-wpp]").attr("class", "mb-3 sucess show");
    });

    $("#input-religiao").keypress(function () {
        $("label[for=input-religiao]").attr("class", "mb-3 sucess show");
    });

    $("#input-igr").keypress(function () {
        $("label[for=input-igr]").attr("class", "mb-3 sucess show");
    });

    $("#input-peso").keypress(function () {
        $("label[for=input-peso]").attr("class", "mb-3 sucess show");
    });

    $("#input-altura").keypress(function () {
        $("label[for=input-altura]").attr("class", "mb-3 sucess show");
    });

    $("#input-camisa").keypress(function () {
        $("label[for=input-camisa]").attr("class", "mb-3 sucess show");
    });

    $("#input-calca").keypress(function () {
        $("label[for=input-calca]").attr("class", "mb-3 sucess show");
    });

    $("#input-calcado").keypress(function () {
        $("label[for=input-calcado]").attr("class", "mb-3 sucess show");
    });

    $("#input-gInstrucao").keypress(function () {
        $("label[for=input-gInstrucao]").attr("class", "mb-3 sucess show");
    });

    $("#input-data-escudamento").keypress(function () {
        $("label[for=input-data-escudamento]").attr("class", "mb-3 sucess show");
    });

    $("#input-sangue").keypress(function () {
        $("label[for=input-sangue]").attr("class", "mb-3 sucess show");
    });

    $("#input-rest-alim").keypress(function () {
        $("label[for=input-rest-alim]").attr("class", "mb-3 sucess show");
    });

    $("#input-alergico").keypress(function () {
        $("label[for=input-alergico]").attr("class", "mb-3 sucess show");
    });


    $("#input-marca").keypress(function () {
        $("label[for=input-marca]").attr("class", "mb-3 sucess show");
    });

    $("#input-modelo").keypress(function () {
        $("label[for=input-modelo]").attr("class", "mb-3 sucess show");
    });

    $("#input-ano").keypress(function () {
        $("label[for=input-ano]").attr("class", "mb-3 sucess show");
    });

    $("#input-cilindrada").keypress(function () {
        $("label[for=input-cilindrada]").attr("class", "mb-3 sucess show");
    });

    $("#input-cor").keypress(function () {
        $("label[for=input-cor]").attr("class", "mb-3 sucess show");
    });

    $("#input-placa").keypress(function () {
        $("label[for=input-placa]").attr("class", "mb-3 sucess show");
    });

    $("#vl_mensalidade").keypress(function () {
        $("#vl_mensalidade").attr("class", "success-input");
    });

    $("input[name='reg.pais']").click(function () {
        $("label[for='reg.pais']").attr("class", "mb-3 sucess show");
    });

    $("input[name='conj.membro']").click(function () {
        $("label[for='conj.membro']").attr("class", "mb-3 sucess show");
    });

    $("input[name='categoria']").click(function () {
        $("label[for='categoria']").attr("class", "mb-3 sucess show");
    });

    $("input[name='escudo']").click(function () {
        $("label[for='escudo']").attr("class", "mb-3 sucess show");
    });

    $("input[name='sexo']").click(function () {
        $("label[for='sexo']").attr("class", "mb-3 sucess show");
    });

    $("input[name='doador']").click(function () {
        $("label[for='doador']").attr("class", "mb-3 sucess show");
    });

    $("input[name='veg']").click(function () {
        $("label[for='veg']").attr("class", "mb-3 sucess show");
    });

    $("input[name='declaracao']").click(function () {
        $("#declaracao").attr("class", "sucess show");
    });




    function validation_field() {
        var i = 0;

        if ($("#input-regiao").val() != "") {
            i++;
        } else {
            $("label[for=input-regiao]").attr("class", "mb-3 error")
        }

        if ($("#input-nome").val() != "") {
            i++;
        } else {
            $("label[for=input-nome]").attr("class", "mb-3 error")
        }

        if ($("#input-rg").val() != "") {
            i++;
        } else {
            $("label[for=input-rg]").attr("class", "mb-3 error")
        }

        if ($("#input-cpf").val() != "") {
            i++;
        } else {
            $("label[for=input-cpf]").attr("class", "mb-3 error")
        }

        if ($("#input-cnh").val() != "") {
            i++;
        } else {
            $("label[for=input-cnh]").attr("class", "mb-3 error")
        }

        if ($("#input-venc-cnh").val() != "") {
            i++;
        } else {
            $("label[for=input-venc-cnh]").attr("class", "mb-3 error")
        }

        if ($("#input-dt-nasc").val() != "") {
            i++;
        } else {
            $("label[for=input-dt-nasc]").attr("class", "mb-3 error")
        }

        if ($("#input-nm-guerra").val() != "") {
            i++;
        } else {
            $("label[for=input-nm-guerra]").attr("class", "mb-3 error")
        }

        if ($("#input-natur").val() != "") {
            i++;
        } else {
            $("label[for=input-natur]").attr("class", "mb-3 error")
        }

        if ($("#input-naciona").val() != "") {
            i++;
        } else {
            $("label[for=input-naciona]").attr("class", "mb-3 error")
        }

        if ($("#input-estado-civil").val() != "") {
            i++;
        } else {
            $("label[for=input-estado-civil]").attr("class", "mb-3 error")
        }

        if ($("#input-endereco").val() != "") {
            i++;
        } else {
            $("label[for=input-endereco]").attr("class", "mb-3 error")
        }

        if ($("#input-nr").val() != "") {
            i++;
        } else {
            $("label[for=input-nr]").attr("class", "mb-3 error")
        }

        if ($("#input-bairro").val() != "") {
            i++;
        } else {
            $("label[for=input-bairro]").attr("class", "mb-3 error")
        }

        if ($("#input-cep").val() != "") {
            i++;
        } else {
            $("label[for=input-cep]").attr("class", "mb-3 error")
        }

        if ($("#input-cid").val() != "") {
            i++;
        } else {
            $("label[for=input-cid]").attr("class", "mb-3 error")
        }

        if ($("#input-est").val() != "") {
            i++;
        } else {
            $("label[for=input-est]").attr("class", "mb-3 error")
        }

        if ($("#input-email").val() != "") {
            i++;
        } else {
            $("label[for=input-email]").attr("class", "mb-3 error")
        }

        if ($("#input-wpp").val() != "") {
            i++;
        } else {
            $("label[for=input-wpp]").attr("class", "mb-3 error")
        }

        if ($("#input-religiao").val() != "") {
            i++;
        } else {
            $("label[for=input-religiao]").attr("class", "mb-3 error")
        }

        if ($("#input-igr").val() != "") {
            i++;
        } else {
            $("label[for=input-igr]").attr("class", "mb-3 error")
        }

        if ($("#input-peso").val() != "") {
            i++;
        } else {
            $("label[for=input-peso]").attr("class", "mb-3 error")
        }

        if ($("#input-altura").val() != "") {
            i++;
        } else {
            $("label[for=input-altura]").attr("class", "mb-3 error")
        }

        if ($("#input-camisa").val() != "") {
            i++;
        } else {
            $("label[for=input-camisa]").attr("class", "mb-3 error")
        }

        if ($("#input-calca").val() != "") {
            i++;
        } else {
            $("label[for=input-calca]").attr("class", "mb-3 error")
        }

        if ($("#input-calcado").val() != "") {
            i++;
        } else {
            $("label[for=input-calcado]").attr("class", "mb-3 error")
        }

        if ($("#input-gInstrucao").val() != "") {
            i++;
        } else {
            $("label[for=input-gInstrucao]").attr("class", "mb-3 error")
        }

        if ($("#input-data-escudamento").val() != "") {
            i++;
        } else {
            $("label[for=input-data-escudamento]").attr("class", "mb-3 error")
        }

        if ($("#input-sangue").val() != "") {
            i++;
        } else {
            $("label[for=input-sangue]").attr("class", "mb-3 error")
        }

        if ($("#input-rest-alim").val() != "") {
            i++;
        } else {
            $("label[for=input-rest-alim]").attr("class", "mb-3 error")
        }

        if ($("#input-alergico").val() != "") {
            i++;
        } else {
            $("label[for=input-alergico]").attr("class", "mb-3 error")
        }

        if ($("#input-marca").val() != "") {
            i++;
        } else {
            $("label[for=input-marca]").attr("class", "mb-3 error")
        }

        if ($("#input-modelo").val() != "") {
            i++;
        } else {
            $("label[for=input-modelo]").attr("class", "mb-3 error")
        }

        if ($("#input-ano").val() != "") {
            i++;
        } else {
            $("label[for=input-ano]").attr("class", "mb-3 error")
        }

        if ($("#input-cilindrada").val() != "") {
            i++;
        } else {
            $("label[for=input-cilindrada]").attr("class", "mb-3 error")
        }

        if ($("#input-cor").val() != "") {
            i++;
        } else {
            $("label[for=input-cor]").attr("class", "mb-3 error")
        }


        if ($("#input-placa").val() != "") {
            i++;
        } else {
            $("label[for=input-placa]").attr("class", "mb-3 error")
        }

        if ($("#vl_mensalidade").val() != "") {
            i++;
        } else {
            $("#vl_mensalidade").attr("class", "error-input")
        }

        if ($("input[name='reg.pais']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='reg.pais']").attr("class", "mb-3 error");
        }


        if ($("input[name='conj.membro']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='conj.membro']").attr("class", "mb-3 error");
        }

        if ($("input[name='categoria']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='categoria']").attr("class", "mb-3 error");
        }

        if ($("input[name='escudo']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='escudo']").attr("class", "mb-3 error");
        }

        if ($("input[name='sexo']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='sexo']").attr("class", "mb-3 error");
        }

        if ($("input[name='doador']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='doador']").attr("class", "mb-3 error");
        }

        if ($("input[name='veg']:checked").val() != undefined) {
            i++;
        } else {
            $("label[for='veg']").attr("class", "mb-3 error");
        }

        return i;
    }

    function declaracao() {
        if ($("input[name='declaracao']:checked").val() != undefined) {
            return true;
        } else {
            $("#declaracao").attr("class", "error");
            return false;
        }
    }
});