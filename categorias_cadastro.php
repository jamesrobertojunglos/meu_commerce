<h1>Cadastro de Categorias</h1>

<?php
if(isset($_POST['gravar'])) {
   $sql_salvar_categorias = "INSERT into categorias
                            descricao
                            values :descricao
   ";
   $categorias_salvar_prepara = $conn->prepare($sql_salvar_categorias);
   if ($categorias_salvar_prepara->execute(array("descricao"=> $_POST['descricao']))) {
      echo "
         <br>
         <div class=\"alert alert-success\">
         Categoria incluida com sucesso!
      ";
   }
} else {

?>

<form method="post">

  <div class="form-floating">
  <textarea class="form-control" name="descricao" placeholder="Descreva a categoria" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Informe a Categoria</label>
  <br>

</div>

    <input class="btn btn-success" type="submit" name="gravar" value="Gravar">
    <br><br>
</form>

<?php
}
?>