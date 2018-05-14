<?php
session_start();
include("../seguranca.php");
include("../conexao.php");


$id				= $_POST["id"];
$titulo   = $_POST["Titulo"];
$telefone = $_POST["Telefone"];
$endereco = $_POST["Endereco"];
$cep      = $_POST["CEP"];
$cidade   = $_POST["CIDADE"];
$estado   = $_POST["ESTADO"];
$descricao = $_POST["DESCRICAO"];
$id_categoria = $_POST["id_categoria"];
$link = mysqli_connect("localhost","root","","db_finder");
$query = mysqli_query($link,"UPDATE finder SET  Titulo ='$titulo', Telefone='$telefone', Endereco='$endereco', CEP='$cep',
  CIDADE='$cidade',ESTADO='$estado',DESCRICAO='$descricao',id_categoria='$id_categoria' Where id='$id'");
       ?>
       <!DOCTYPE html>
       <html lang="pt-br">
         <head>
           <meta charset="utf-8">
         </head>

         <body>
           <?php
       if(mysqli_affected_rows($link)!=0){
         echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/teste_finder/'>
         <script type=\"text/javascritp\">
           alert(\" Alterado com Sucesso.\");
         </script>
         ";
       }
       else { echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/teste_finder/'>
       <script type=\"text/javascritp\">
         alert(\" Não ALterado com Sucesso.\");
       </script>";}
         ?>
       </body>
       </html>
