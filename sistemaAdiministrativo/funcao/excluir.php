<?php 
include'../conexao.php';
$id=$_REQUEST['id'];
$sql="DELETE FROM funcao WHERE funcao.id='$id'";
$resultado= mysqli_query($conexao, $sql) or die("erro ao excluir");
 header('location:../funcao.php');


?>
