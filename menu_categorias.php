<?php
$sql_categorias ="SELECT * from categorias";
$sql_prepara = $conn->prepare($sql_categorias);
$categorias = $sql_prepara->execute();

while ($categoria = $sql_prepara->fetch()) {
   echo "<a href=\"?pagina={$categoria['id']}\">{$categoria['descricao']}</a><br>";
}
?>