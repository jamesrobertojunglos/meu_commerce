<h1>Lista de Categorias</h1>

<a class="btn btn-primary " href="?pagina=categorias_cadastro">Cadastro de categorias</a>
<br><br>


<?php
    $sql_categorias = "SELECT * FROM categorias";
    $categorias_prepara = $conn ->prepare($sql_categorias);
    $categorias_prepara->execute(); 

  
?>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
  while ($categorias = $categorias_prepara->fetch())  {
    echo "<tr>";
    echo "<td>".$categorias['id']."</td>";
    echo "<td>".$categorias['descricao']."</td>";
    echo "
        <td>
            <a class=\"btn btn-warning\" href=\"?pagina=categorias_editar&id={$categorias['id']}\">Editar</a>
            <a class=\"btn btn-danger\" href=\"?pagina=categorias_deletar&id={$categorias['id']}\">Deletar</a>
    ";
    
    echo "</tr>";
  }
  ?>
</tbody>
</table>
  