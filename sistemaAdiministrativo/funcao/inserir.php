<?php
include'../conexao.php';


$descricao=$_REQUEST['descricao'];
$obs=$_REQUEST['obs'];

$sql="INSERT INTO funcao (descricao,obs) 

VALUES ('$descricao','$obs')";


$resultado=mysqli_query($conexao,$sql) or die("erro ao inserir") ;


header('location:../funcao.php');
?>