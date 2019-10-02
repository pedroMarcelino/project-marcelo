$(function () {
    return_form();

    $("#enviar").click(function () {
        console.log(validation_field())
        if (validation_field() == 46) {
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
            }
        }
    });

    function return_form() {
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: 'return-form.php',
            data: "",
            success: function (data) {
                $("#dados").html(data);
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

    $("#input-apto").keypress(function () {
        $("label[for=input-apto]").attr("class", "mb-3 sucess show");
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

        if ($("#input-apto").val() != "") {
            i++;
        } else {
            $("label[for=input-apto]").attr("class", "mb-3 error")
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