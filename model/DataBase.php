<?php
class DataBase
{
    public static function conecta($ip, $usuario, $senha, $banco, $sql)
    {
        try {
            $conexao = mysql_connect($ip, $usuario, $senha);
            if (!$conexao) {
                throw new Exception("Falha na conexão com o banco de dados -> ", 0);
            }

            $db = mysql_select_db($banco, $conexao);
            if (!$db) {
                throw new Exception("Falha na seleção do banco de dados!", 0);
            }

            $resultado = mysql_query($sql, $conexao);
            if (!$resultado) {
                throw new Exception("Falha ao trazer o resulado da query!", 0);
            }
            
            mysql_close($conexao);
            return $resultado;

        } catch (Exception $e) {
            return "Ocorreu  um erro do tipo: " . $e->getMessage();
            header("location: #");
        }
        
            
        
    }

}

?>
