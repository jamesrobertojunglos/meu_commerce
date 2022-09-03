<?php

if(isset($_POST['deletar'])) {
    $sql_delete_categorias = "DELETE
                        FROM categorias 
                        WHERE id = :id
";   
    $categorias_delete_prepara = $conn->prepare($sql_delete_categorias);
   if ($categorias_delete_prepara->execute(array("id" => $_GET['id'])));{
      echo "
      <br>
        <div class=\"alert alert-success\">
            Filme excluido com sucesso!
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

<table class="table">
   <tr>
     <td>
        ID
     </td>
     <td>
       <?php echo $categorias['id']; ?>
     </td>
   </tr>
   <tr>
     <td>
       Descrição
     </td>
     <td>
       <?php echo $categorias['descricao']; ?>
     </td> 
   </tr>
</table>

<form method="POST">
    <input class="btn btn-danger" type="submit" name="deletar" value="Deletar">
    <br><br>

</form>

<?php
}
?>
sdsds