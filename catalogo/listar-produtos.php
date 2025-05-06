<?php
$produtos = json_decode(file_get_contents("produtos.json"), true);

foreach ($produtos as $produto) {
    echo "<div class='produto'>";
    echo "<h3>{$produto['nome']}</h3>";
    echo "<p>R$ {$produto['preco']}</p>";
    echo "<p>{$produto['descricao']}</p>";
    echo "</div>";
}
?>
