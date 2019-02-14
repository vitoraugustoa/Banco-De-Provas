$(function() {
    $(".check-all").removeClass("is-checked");
})

$("#check-todos").click(function() {
    if (!$(this).hasClass("is-checked")) {
        $(".check-all").addClass("is-checked");
        $(".mdl-checkbox__input").prop("checked", true);
    } else {
        $(".check-all").removeClass("is-checked");
        $(".mdl-checkbox__input").prop("checked", false);
    }

});

$(".check").change(function() {
    var n = $(".check input:checked").length;
    console.log(n);
    if (n == 1) {
        $("#btn-delete").removeClass("invisivel");
        $("#btn-update").removeClass("invisivel");
        $("#btn-add-prova").removeClass("invisivel");
    } else if (n > 1) {
        $("#btn-update").addClass("invisivel");
        $("#btn-delete").removeClass("invisivel");
        $("#btn-add-prova").removeClass("invisivel");
    } else {
        $("#btn-delete").addClass("invisivel");
        $("#btn-update").addClass("invisivel");
        $("#btn-add-prova").addClass("invisivel");
    }
});
