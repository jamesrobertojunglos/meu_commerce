<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="js/jquery-3.6.1.min.js"></script>
    </head>

</html>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="background-color:aqua">
                <h1>Meu Commerce</h1>
            </div>
        </div>
        <div class="row">
            <div class style="background-color:blue"><?php include 'menu_horizontal.php'?>
            </div>
        </div>
        <div class="row">
            <div class="col-4" style="background-color:darkgoldenrod">
                <?php include "menu_categorias.php" ; ?>
            </div>
            <div class="col-8" style="background-color:cadetblue" style="background-color:aqua">
                <?php
                        if (isset($_GET['pagina'])) {
                        if ($_GET['pagina'] =='produtos') {
                            include 'produtos_home.php';
                        }
                        if ($_GET['pagina'] =='produto') {
                            include 'produto_detalhes.php';
                        }
                         if ($_GET['pagina'] =='sacola') {
                            include 'sacola.php';
                         }
                         if ($_GET['pagina'] =='meus_pedidos') {
                            include 'meus_pedidos.php';
                        }
                        if ($_GET['pagina'] =='realizar_pedido') {
                            if (!isset($_SESSION['autenticado'])){
                                include 'login.php';
                            } else {
                                 include 'realizar_pedido.php';
                            }  
                        }
                 } else {
                          include "produtos_destaque.php" ; 
                        }
                    ?>
            </div>
        </div>
    </div>
    <div class="col-12 text-center" style="background-color:aqua">@meu_commerce 2022</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    //Swal.fire({
    // icon: 'error',
    // title: 'Oops...',
    //text: 'Something went wrong!',
    //footer: '<a href="">Why do I have this issue?</a>'
    //})
    //
    </script>

</body>

</html>