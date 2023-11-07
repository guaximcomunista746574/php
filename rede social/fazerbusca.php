<?php
session_start();
if (isset($_GET["busca"])) {
    $conteudo = $_GET["busca"];
    if (isset($_SESSION["postagens"])) {
        echo "<ul>";
        foreach ($_SESSION["postagens"] as $postagens) {
            if (stripos($postagens, $conteudo) !== false) {
                echo "<li>$postagens</li>";
            }

        }
        echo "</ul>";
    }
}
?>