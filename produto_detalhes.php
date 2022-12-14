<?php
$sql_produto = "SELECT * from produtos where id = :id";
$produto = $conn->prepare($sql_produto);
$produto->execute(['id'=> $_GET['id']]);
$produto_detalhes = $produto->fetch();

?>

<h1><?php echo $produto_detalhes['descricao'];?> </h1>
<form method="post">
    <div class="card mb-3">
        <img src="<?php echo $produto_detalhes['imagem'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produto_detalhes['descricao'];?></h5>
            <p class="card-text"><?php echo $produto_detalhes['resumo'];?></p>
            <h3 class="card-text">R$ <?php echo $produto_detalhes['valor'];?>,00</h3>
            </p>

            <p class="card-text">
                <button class="sacola btn btn-primary">Adicionar a sacola</button>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                $(".sacola").click(function() {
                    alert('Produto adicionado com sucesso!');
                    $.post("", {
                        "adicionar_sacola": true
                    }, function(data, status) {
                        swal.fire({
                            title: 'Sucesso!',
                            text: 'Seu produto foi adicionado a sacola',
                            icon: 'success',
                            confirmButtonText: 'ok'
                        })
                    });
                });
                </script>
            </p>
            <p class="card-text"><small class="text-muted"><?php echo $produto_detalhes['caracteristicas'];?></small>
        </div>