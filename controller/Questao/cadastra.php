<?php

require_once "../model/DataBase.php";
require_once "../model/Questoes.php";

$obj = new Questoes();


$tipoQuestao = $_POST['tipo-questao'];

if($tipoQuestao == "aberta"){
    
}

$pergunta = $_POST[''];
$resposta = $_POST[''];
$classificacao = $_POST[''];
$idUsuario = $_POST[''];
$idMateria = $_POST[''];
$idTag = $_POST[''];
$idCurso = $_POST[''];




$resposta = $obj -> cadastrarQuestao($pergunta, $resposta, $classificacao, $idUsuario, $idMateria, $idTag, $idCurso);

?>