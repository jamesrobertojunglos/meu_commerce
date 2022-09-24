<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    Banner
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Menu horizontal
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <?php include "menu_categorias.php"; ?>
                </div>
                <div>
                    <div class="row">
                        <div class="col-2">
                            menu vertical
                        </div>
                        <div class="col-10">
                            produtos
                        </div>
                    </div>
                    <div class="row" style="background-color:aqua">@meu_commerce 2022</div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                    crossorigin="anonymous">
                </script>
    </body>

</html>