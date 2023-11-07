<?php
$nomeServidor = "sql301.infinityfree.com";   // localhost 
$username ="if0_35249654";   //root                       
$senha = " vSY0X2IV34"; //""
$nomeBanco = "rede_banco";


$conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

if($conexao -> connect_error){
die("conexão com o banco de dados falhou!".$conexao->connect_error);

}



?>