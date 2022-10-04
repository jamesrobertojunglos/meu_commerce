<h1>Produtos em destaque </h1>


<?php
$sql_produtos_destaque = '
SELECT id, descricao, valor
FROM produtos
ORDER BY RAND()
LIMIT 4 ;
';
$sql_produtos_destaque = $conn->prepare($sql_produtos_destaque);
$sql_produtos_destaque->execute();

while ($produto = $sql_produtos_destaque->fetch()) {
    print_r($produto);
    echo '<br>';
}
?>