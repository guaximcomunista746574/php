<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <link rel="shortcut icon" href="https://img.icons8.com/?size=512&id=60956&format=png" type="image/x-icon">
    <title>prossesando postagem</title>

</head>

<body>
    <div class="painel">
        <div class="cabecalho">
            <h1>HeartfeltHub</h1>
        </div>
        <div class="conteudo">
            <h2> discordia feita!</h2>
            <?php
            //$usuario = "lucas";
            //criação do cokkie
            //setcookie("nome", $usuario, time() + 86400 * 30, "/");
            $usuario=$_COOKIE["nome"];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $postagem = $_POST["postagem"];
                echo "$usuario postou:$postagem";
                session_start();
                if (!isset($_SESSION["postagens"])) {
                    $_SESSION["postagens"] = array();

                }
                array_push($_SESSION["postagens"], $postagem);
            }
            ?>

        </div>
        <div class="rodape">
            <div class="rodape">
                <a href="cokie.html" class="botao">Cadastrar Usuario</a>
                <a href="busca.html" class="botao">buscar</a>
                <a href="lista.php" class="botao">lista de discordia </a>
                <footer>
                <p>&copy; 2023 rede social</p>
            </footer>
            </div>
        </div>
    </div>
</body>

</html>