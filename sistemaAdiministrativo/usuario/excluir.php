<?php 
include'../conexao.php';
$id=$_REQUEST['id'];
$sql="DELETE FROM usuario WHERE usuario.id='$id'";
$resultado= mysqli_query($conexao, $sql) or die("erro ao excluir");
 header('location:../principal.php');


?>
