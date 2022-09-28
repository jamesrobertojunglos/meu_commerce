<?php
$sql_categoria = "SELECT * from categorias where id = :id" ;
$categoria = $conn->prepare($sql_categoria);
$categoria->execute(['id'=> $_GET['categoria']]);
$linha_categoria = $categoria->fetch();
?>

<h3>Produtos da categoria: <?php echo $linha_categoria['descricao']; ?></h3>

<?php
$sql_produtos = "SELECT * from produtos where categoria_id = :id" ;
$consulta_produtos = $conn->prepare($sql_produtos);
$consulta_produtos->execute(['id'=> $_GET['categoria']]);


while($produto = $consulta_produtos->fetch()) {
    echo "{$produto['descricao']}<br>"; 
    ?>
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $produto['imagem']; ?>
  "class="card-img-top" alt="<?php echo $produto['descricao']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produto['descricao'];?></h5>
    <p class="card-text"><?php echo $produto['resumo'];?></p>
        <a href="#" class="btn btn-primary">Detalhes</a>
  </div>
</div>
<?php
}
?>