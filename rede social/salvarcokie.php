<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="https://img.icons8.com/?size=512&id=60956&format=png" type="image/x-icon">
    <title>postagens</title>
</head>

<body>
    <div class="painel">
        <div class="cabecalho">
            <h1>definição de cokie</h1>
            <a href="index.html" class="botao">voltar</a>
        </div>
        <div class="conteudo">
            <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
              $nome = $_POST["usuario"];
              setcookie("nome",$nome,time() + 86400 * 30, "/");
              echo "Cokie de nome de usuario definido com sucesso.<br>";
              echo "nome usuario: $nome";
            }else{
                   echo"Erro:requisição invalida";
            }

            ?>
            <div class="rodape">



                <footer>

                    <p>&copy; 2023 rede social</p>
                </footer>
            </div>
        </div>
    </div>

</body>

</html>