$(function () {

    function ret() {
        $.ajax({
            url: 'function/ret-user.php',
            dataType: 'html',
            type: 'POST',
            data: '',
            success: function (data) {
                $("#return").html(data)
            },
        });
    }

    $(document).on("click", ".btn2", function () {
        var id_element = $(this).attr('id');
        // console.log(id_element);
        const element = document.querySelector('.' + id_element);
        element.classList.add('animated', 'zoomOut');
        var v = [];
        var id_descontruido = "";

        var cd_exe = $(this).val();


        for (var i = 0; i < id_element.length; i++) {
            v[i] = id_element.charAt(i)
        }

        for (var i = 4; i < id_element.length; i++) {
            id_descontruido += v[i];
        }
        $("." + id_element).css("display", "none");

        $("#btn_conf" + id_descontruido).val(cd_exe);

        const element2 = document.querySelector('#conf_btn' + id_descontruido);
        $("#conf_btn" + id_descontruido).css("display", "block");
        element2.classList.add('animated', 'zoomIn');
    });

    $(document).on("click", ".btn-cancel", function () {
        var id_element = $(this).attr('id');
        var v = [];
        var id_descontruido = "";

        for (var i = 0; i < id_element.length; i++) {
            v[i] = id_element.charAt(i)
        }

        for (var i = 9; i < id_element.length; i++) {
            id_descontruido += v[i];
        }

        $("#conf_btn" + id_descontruido).css("display", "none");
        $(".btns" + id_descontruido).attr("class", "btns" + id_descontruido + " animated zoomIn ");
        $(".btns" + id_descontruido).css("display", "block");

    });


    $(document).on("click", ".btn-conf", function () {

        var id_element = $(this).attr('id');
        var v = [];
        var id_descontruido = "";

        for (var i = 0; i < id_element.length; i++) {
            v[i] = id_element.charAt(i)
        }

        for (var i = 3; i < id_element.length; i++) {
            id_descontruido += v[i];
        }

        var dados = {
            "cd": id_descontruido,
        }

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'function/delete_user.php',
            data: dados,
            success: function (data) {
                if (data.msg == true) {
                    swal("Excluido!", "Usuario excluido com sucesso", "success");
                } else if (data.msg == false) {
                    swal("Erro!", "Não foi possivel excluir esse usuario", "error");
                }
            },
            complete: function () {
                ret();
            }
        });

    });

    $(document).on("click", ".btn-adm", function () {

        var id_element = $(this).attr('id');
        var v = [];
        var id_descontruido = "";

        for (var i = 0; i < id_element.length; i++) {
            v[i] = id_element.charAt(i)
        }

        for (var i = 3; i < id_element.length; i++) {
            id_descontruido += v[i];
        }

        var dados = {
            "cd": id_descontruido,
        }


        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'function/alter-adm.php',
            data: dados,
            success: function (data) {
                if (data.msg == true) {
                    swal("Excluido!", "Usuário alterado com sucesso", "success");
                } else if (data.msg == false) {
                    swal("Erro!", "Não foi possivel alterar esse usuário", "error");
                }
            },
            complete: function () {
                ret();
            }
        });

    });

    $(document).on("click", ".btn-user", function () {

        var id_element = $(this).attr('id');
        var v = [];
        var id_descontruido = "";

        for (var i = 0; i < id_element.length; i++) {
            v[i] = id_element.charAt(i)
        }

        for (var i = 3; i < id_element.length; i++) {
            id_descontruido += v[i];
        }

        var dados = {
            "cd": id_descontruido,
        }


        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'function/alter-user.php',
            data: dados,
            success: function (data) {
                if (data.msg == true) {
                    swal("Excluido!", "Usuário alterado com sucesso", "success");
                } else if (data.msg == false) {
                    swal("Erro!", "Não foi possivel alterar esse usuário", "error");
                }
            },
            complete: function () {
                ret();
            }
        });

    });
});