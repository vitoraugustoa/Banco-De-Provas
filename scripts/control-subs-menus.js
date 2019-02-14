function ControlarSubMenus(id) {
    $(`#${id}`).next().toggleClass("invisivel");
    $(`#${id}`).find("i").toggle();

}