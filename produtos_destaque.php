<h1>Produtos em destaque </h1>


<?php
if (isset($_GET['categoria'])) {
    $sql_produtos_destaque = '
SELECT id, descricao, valor, resumo, imagem
FROM produtos
WHERE categoria_pai = :categoria_id
  AND categoria = :categoria_id
ORDER BY RAND()
LIMIT 6 ;
';
$sql_produtos_destaque = $conn->prepare($sql_produtos_destaque);
$sql_produtos_destaque->execute(["categoria_id" =>$_GET['categoria']]);    
} else {
$sql_produtos_destaque = '
SELECT id, descricao, valor, resumo, imagem
FROM produtos
ORDER BY RAND()
LIMIT 6 ;
';
$sql_produtos_destaque = $conn->prepare($sql_produtos_destaque);
$sql_produtos_destaque->execute();
}
?>
<div class="row">
    <?php
while ($produto = $sql_produtos_destaque->fetch()) {
?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $produto['imagem']; ?>
" class="card-img-top" alt="<?php echo $produto['descricao']; 
?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produto['descricao'];?></h5>
            <p class="card-text"><?php echo $produto['resumo'];?></p>
            <a href="?pagina=produto&id=<?php echo $produto['id']; ?>" class="btn btn-primary">Detalhes</a>
        </div>
    </div>
    <?php }
?>
</div>