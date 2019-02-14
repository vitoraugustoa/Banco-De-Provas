<?php 

session_start();

require_once "../model/DataBase.php";
require_once "../model/Usuario.php";


$obj = new Usuario();



$email = $_POST['email-user'];
$senha = $_POST['pass-user'];


$resposta = $obj->logar($email, $senha);
if($resposta == 0){
echo "acesso negado" ;

}
else{
  Echo "login efetuado com sucesso!!!!!!!!!!!!!! ";
}

 ?>