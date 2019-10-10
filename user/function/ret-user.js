$(function () {
    $(document).on("click", ".btn2", function () {
        var id_element = $(this).attr('id');
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
});