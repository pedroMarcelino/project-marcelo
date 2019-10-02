$(function () {

    return_form();

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
}); 1