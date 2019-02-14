$(".tipo-questoes").click(function () {

  console.log($(this).attr("data-val"));

  if ($(this).attr("data-val") == "fechada") {
    $("#container-questao-aberta").addClass("invisivel");
    $("#container-questao-fechada").removeClass("invisivel");
  } else {
    $("#container-questao-fechada").addClass("invisivel");
    $("#container-questao-aberta").removeClass("invisivel");
  }
  
  
});
