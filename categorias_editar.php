<?php

if(isset($_POST['salvar'])) {
    $sql_editar_categorias = "UPDATE categorias
                              SET descricao = :descricao
                              WHERE id = :id
";   
    $categorias_editar_prepara = $conn->prepare($sql_editar_categorias);
   if ($categorias_editar_prepara->execute(array(
        "id"        => $_GET['id'],
        "descricao" => $_POST['descricao']
        ))) {
      echo "
      <br>
        <div class=\"alert alert-success\">
           A categoria foi alterada com sucesso!
        </div>
      ";
   }
} else {

$sql_categorias = "SELECT *
                    FROM categorias
                    WHERE id = :id";
$categorias_prepara = $conn->prepare($sql_categorias);
$categorias_prepara->execute(array('id'=>$_GET['id']));

$categorias = $categorias_prepara->fetch();

?>
<form method="POST">
<table class="table">
   <tr>
     <td>
        <h1>Edição de Categoria<h1>
     </td>
     <td>
        <div class="form-floating">
            <textarea class="form-control" name="descricao" placeholder="Edite a categoria" 
            id="floatingTextarea" ><?php echo $categorias['descricao']; ?></textarea>
            <label for="floatingTextarea">Faça a edição desejada</label>
        <br>
        </div>
     </td> 
   </tr>
</table>


    <input class="btn btn-primary" type="submit" name="salvar" value="Salvar">
    <br><br>

</form>

<?php
}
?>
