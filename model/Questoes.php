<?php
require_once("Usuario.php");

class Questoes
{
    public $idQuestao;
    public $Pergunta;
    public $Resposta;
    public $Classificacao;
    public $idUsuario;
    public $idMateria;
    public $idCurso;
    public $idTag;

    function getAllQuestoes()
    {
        $SqlQuery = "SELECT * FROM questao";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            $lstQuestoes = array();
            while ($itemQuestoes = mysql_fetch_array($resultado)) {
                $questao = new Questoes();
                $questao->idQuestao = $itemQuestoes[''];
                $questao->Pergunta = $itemQuestoes[''];
                $questao->Resposta = $itemQuestoes[''];
                $questao->Classificacao = $itemQuestoes[''];
                $questao->idUsuario = $itemQuestoes[''];
                $questao->idMateria = $itemQuestoes[''];
                $questao->idCurso = $itemQuestoes[''];
                $questao->idTag = $itemQuestoes[''];
                array_push($lstQuestoes, $questao);
            }
            echo "Buscados";
            return $lstQuestoes;
        } else {
            echo "Deu ruim";
            return false;
        }
    }


    function getQuestaoById($id)
    {
        $SqlQuery = "SELECT * FROM questao WHERE IdQuestao = {$id}";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {

            while ($itemQuestoes = mysql_fetch_array($resultado)) {
                $questao = new Usuario();
                $questao->idQuestao = $itemQuestoes[''];
                $questao->Pergunta = $itemQuestoes[''];
                $questao->Resposta = $itemQuestoes[''];
                $questao->Classificacao = $itemQuestoes[''];
                $questao->idUsuario = $itemQuestoes[''];
                $questao->idMateria = $itemQuestoes[''];
                $questao->idCurso = $itemQuestoes[''];
                $questao->idTag = $itemQuestoes[''];
            }
            echo "Buscado";
            return $questao;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

    function cadastrarQuestao($Pergunta, $Resposta, $Classificacao, $idUsuario, $idMateria, $idTag, $idCurso)
    {
        $SqlQuery = "call spInsereQuestao  ({$Pergunta}, {$Resposta}, {$Classificacao}, {$idUsuario}, {$idMateria}, {$idCurso}, {$idTag})";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

      ECHO $resultado;
    }


    function deleteQuestao($id)
    {
        $SqlQuery = "DELETE FROM questao WHERE IdQuestao = {$id}";
        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            echo "Excluido";
            return true;
        } else {
            echo "Deu ruim";
            return false;
        }
    }


    function updateProva($Pergunta, $Resposta, $Classificacao, $idUsuario, $idMateria, $idTag, $idCurso)
    {
        $SqlQuery = "UPDATE `prova` 
        SET `IdProva`= ,`nivel`= ,`situacao`= ,`valor`= ,`IdQuestao`=],`IdUsuario`=[value-6],`IdMateria`=[value-7],`IdTag`=[value-8],`IdCurso_1`=[value-9] 
        WHERE IdProva = {$id} ";

        $resultado = DataBase::conecta(IP, USER, PASSWORD, DATABASE, $SqlQuery);

        if (mysql_num_rows($resultado) > 0) {
            echo "Atualizado";
            return true;
        } else {
            echo "Deu ruim";
            return false;
        }
    }

}

?>