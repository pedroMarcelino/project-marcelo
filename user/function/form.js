$(function () {
    $("#imprimir").click(function () {
        $("nav").attr("class", "navbar navbar-expand-sm bg-light hidden");
        $("#imprimir").attr("class", "btn btn-outline-primary hidden");

        window.print();
        $("nav").attr("class", "navbar navbar-expand-sm bg-light");
        $("#imprimir").attr("class", "btn btn-outline-primary");
    });

    console.log($("input").attr("disabled", "true"));
});

