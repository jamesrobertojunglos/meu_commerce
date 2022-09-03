<?php
  include "bibliotecas/conexao.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
       <div class = "row">
          <div class="col-12 bg-secondary text-center">Meu Ecomerce</div>   
    </div>

        <div class = "row">
            <div class= "col-2 bg-warning">
              <?php
                    include "menu.php";
              ?>
            </div>
    
            <div class="col-10">
              <?php
               if(isset($_GET['pagina'])) {
                  include $_GET['pagina'].".php";
               } else {
                  include "home.php"; 
               }
               ?>
            </div>
        </div>

        <div class ="row">
            <div class="col-12 bg-info text-center">@ Devti 2022 - Unidavi</div>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>