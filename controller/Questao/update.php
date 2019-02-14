<?php

require_once "../model/DataBase.php";
require_once "../model/Questoes.php";

$obj = new Questoes();

$pergunta = $_POST[''];
$resposta = $_POST[''];
$classificacao = $_POST[''];
$idUsuario = $_POST[''];
$idMateria = $_POST[''];
$idTag = $_POST[''];
$idCurso = $_POST[''];
$idQuestao = $_POST[''];

$resposta = $obj -> updateQuestao($Pergunta, $Resposta, $Classificacao, $idUsuario, $idMateria, $idTag, $idCurso,$idQuestao);

?>