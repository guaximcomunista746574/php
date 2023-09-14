<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>cauculando medias </h1>
<?php
$notasAluno1 = array(9.5,8.7, 7.8);
$notasAluno2 = array(6.5,5.2,4.9);
$notasAluno3 = array(7.0,8.5,6.7);

    function caucularMedia($notas){
        $soma = 0;
        $quantidade=count($notas);
         for($i=0; $i<$quantidade; $i++){
            $soma = $soma + $notas[$i];

         }
         if($quantidade >0){
            return $soma /$quantidade;

         }else{
         return 0;
         }

       }
       $mediaAluno1 =caucularMedia($notasAluno1);
       $mediaAluno2 =caucularMedia($notasAluno2);
       $mediaAluno3 =caucularMedia($notasAluno3);
       

       //aluno1
      $mediaAluno1 =number_format($mediaAluno1,2, ',','.');
      //aluno2
      $mediaAluno2 =number_format($mediaAluno2,2,',','.');
      //aluno3
      $mediaAluno3 =number_format($mediaAluno3,2,',','.');


      echo"<br> media do aluno 1: $mediaAluno1";
      echo"<br> media do aluno 2: $mediaAluno2";
      echo"<br> media do aluno 3: $mediaAluno3";

      $alunos = array(
         "jose" => $mediaAluno1,
         "joão" => $mediaAluno2,
         "maria" => $mediaAluno3
      );
      foreach($alunos as $alunos => $media){
         if($media >= 6){
            echo "<br> $aluno foi aprovado";
         }else{
            echo "<br> $aluno for reprovado";
         }
      }
      
?>

</body>