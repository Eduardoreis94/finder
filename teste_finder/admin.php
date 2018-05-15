<?php
  session_start();
  include("seguranca.php");
  include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Pagina Administrativa ">
    <meta name="author" content="Eduardo Reis Web">
    <link rel="icon" href="img/favicon.ico">
    <title>Painel Administrativo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
		<?php // direcionamento de paginas

			include("menu_admin.php");


      $pag[1] = "buscar.php";
      $pag[23] = "sair.php";


      $pag[2] = "listar_finder.php";
      $pag[3] = "cadastro_finder.php";
      $pag[4] = "editar_finder.php";
      $pag[5] = "visu_finder.php";
      $pag[9] = "login.php";


      $link = $_GET["link"];


      if (!empty($link)){
        if(file_exists($pag[$link])){
          include $pag[$link];
          }else{
            include "admin.php";
          }
      }else {
        include "index.php";
      }
		 ?>


    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
