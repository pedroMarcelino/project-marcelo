$(function () {
    ret();

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
});