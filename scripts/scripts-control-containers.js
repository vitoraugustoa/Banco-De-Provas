function toggleContainers() {
  console.log(teste);
  if ($('.teste').hasClass('is-checked')) {
    $('.container-filtrar').addClass('invisivel');
  } else {
    $('.container-filtrar').removeClass('invisivel');
  }
}
