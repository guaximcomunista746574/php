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
            <h1>lista de discordia</h1>
            <a href="index.html" class="botao">fazer outra discordia</a>
        </div>
        <div class="conteudo">
            <?php
            $usuario = $_COOKIE["nome"];
            echo "bem-vindo $usuario!";
            session_start();
                if(isset($_SESSION["postagens"])){
                    foreach ($_SESSION["postagens"] as $postagens) {
                        echo '<div class="card">';
                        echo "<strong> $usuario</strong>";
                        echo "$postagens";
                        echo "</div>";
                }
            

          
            
            }
            ?>
        </div>
        <div class="rodape"> <a href="cokie.html" class="botao">Cadastrar Usuario</a>
            <a href="busca.html" class="botao">buscar</a>
            <a href="lista.php" class="botao">lista de discordia </a>
            <footer>
                <p>&copy; 2023 rede social</p>
            </footer>
        </div>
    </div>

</body>

</html>