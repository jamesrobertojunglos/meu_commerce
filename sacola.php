<?php
  if(isset($_SESSION['sacola'])) { ?>
<form method="post">
    <input class="btn btn-danger" type="submit" name="limpar_sacola" value="Limpar sacola">
</form>
<hr>
<table class=" table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">valor</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($_SESSION['sacola'] as $item) {

            //select produto
            $sql_produto = "SELECT * from produtos where id = :id";
            $produto = $conn->prepare($sql_produto);
            $produto->execute(["id" => $item[0]]);
            $produto = $produto->fetch();
            ?>
        <tr>
            <th scope="row"><?php echo $produto ['id']; ?></th>
            <td><?php echo $produto ['descricao']; ?></td>
            <td><?php echo $produto ['valor']; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="produto" value="<?php echo $produto['id']; ?>">
                    <input class="btn btn-danger" type="submit" name="remover_sacola" value="Remover">
                </form>
            </td>
        </tr>
        <?php }
        ?>

    </tbody>
</table>
<?php } else {
    echo '<h3>Nenhum produto adicionado a sacola.</3>';
} ?>