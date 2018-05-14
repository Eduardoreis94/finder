<?php
	session_start();
	include("../seguranca.php");
	include("../conexao.php");
	$id	 							= $_GET["id"];
	$link = mysqli_connect("localhost","root","","db_finder");
	$query = "DELETE FROM  cliente WHERE id=$id";
	$resultado = mysqli_query($link,$query);


	?>
	<!DOCTYPE html>
	<html lang="pt-br">
	  <head>
	    <meta charset="utf-8">
		</head>

		<body>
			<?php
	if(mysqli_affected_rows($link)!=0){
		echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/teste_finder/admin.php?link=10'>
		<script >
			alert(\" Apagado com Sucesso.\");
		</script>
		";
	}
	else { echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/teste_finder/admin.php?link=10'>
	<script >
		alert(\" Não Apagado com Sucesso.\");
	</script>";}
 		?>
	</body>
	</html>
