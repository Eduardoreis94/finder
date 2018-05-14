	<?php
	session_start();
	include("../seguranca.php");
	include("../conexao.php");
	$link = mysqli_connect("localhost","root","","db_finder");

	$id				= $_POST["id"];
  $titulo   = $_POST["Titulo"];
  $telefone = $_POST["Telefone"];
  $endereco = $_POST["Endereco"];
  $cep      = $_POST["CEP"];
  $cidade   = $_POST["CIDADE"];
  $estado   = $_POST["ESTADO"];
  $descricao = $_POST["DESCRICAO"];
  $id_categoria = $_POST["id_categoria"];

	$query = mysqli_query($link,"INSERT INTO finder (
			Titulo,
			Telefone,
			Endereco,
			CEP,
			CIDADE,
			ESTADO,
			DESCRICAO,
			id_categoria)
	VALUES (
		'$titulo',
		'$telefone',
		'$cep',
		'$cidade',
		'$estado',
		'$descricao',
		'$id_categoria')
		");
		?>
		<!DOCTYPE html>
			<html lang="pt-br">
			  <head>
			    <meta charset="utf-8">
				</head>

				<body>
					<?php
						if(mysqli_affected_rows($link)!=0){
							echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/teste_finder/>
							<script type=\"text/javascritp\">
								alert(\" Cadastrado com Sucesso.\");
							</script>";
						}
						else { echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;
							URL=http://localhost/teste_finder/'>
						<script type=\"text/javascritp\">
							alert(\" Não Cadastrado com Sucesso.\");
						</script>";}
					 		?>
	</body>
	</html>
