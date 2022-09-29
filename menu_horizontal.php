<a class="btn btn-success" href="?pagina=sacola">
    Sacola

    <?php if (isset($_SESSION['sacola'])) {
        echo "(".count($_SESSION['sacola']).")";
    } ?>
</a>