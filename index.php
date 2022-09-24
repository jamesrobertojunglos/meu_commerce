<?php
session_start();

if (isset($_GET['debug'])) {
  $_session['debug'] = $_GET['debug'];
}

if (isset($_GET['pagina']) && $_GET['pagina'] == 'logout') {
    session_destroy();
    session_start();
}
  include_once 'lib/conexao.php';
  include_once 'lib/sql.php';
  include_once 'lib/autenticar.php';
  include_once 'home.php';
// if (isset($_SESSION['autenticado'])) {
//     if (isset($_GET['pagina'])) {
//         //buscar no banco de dados se a página requisitada existe
//         $sql = "SELECT *
//                     FROM paginas
//                     WHERE id = :id
//             ";
//         $consulta = $conn->prepare($sql);
//         $consulta->execute(['id' => $_GET['pagina']]);
//         $linha = $consulta->fetch();
//         if ($consulta->rowCount() > 0) {
//             include 'menu.php';
//             include $linha['src'];
//         } else {
//             include 'menu.php';
//             include '404.php';
//         }
//     } else {
//         include 'menu.php';
//         include 'home.php';
//     }
// } else {
//     include 'login.php';
// }

if (isset($SESSION['debug'])) {
  if ($_SESSION['debug'] == true) {
    include 'liv/debug.php';
  }
}