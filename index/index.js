$(function () {
    validation_field();

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

    }
});