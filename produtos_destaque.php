<h1>Produtos em Destaque </h1>


<?php
$sql_produtos_destaque = '
SELECT id, descricao, valor, resumo, imagem
FROM produtos
ORDER BY RAND()
LIMIT 6 ;
';
$sql_produtos_destaque = $conn->prepare($sql_produtos_destaque);
$sql_produtos_destaque->execute();
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