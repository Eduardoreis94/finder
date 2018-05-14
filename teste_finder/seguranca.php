<?php
	ob_start();
	if ((	$_SESSION['Userid']== "") || ($_SESSION['Usernome']=="") || ($_SESSION['NivelAcesso'] == "")){

			// destroy as variavel
			unset(
				$_SESSION['Usernome'],
				$_SESSION['Userid'],
				$_SESSION['NivelAcesso']
			);


		//Mensagem de Erro
		$_SESSION ['loginErro'] = "Area Restrita para usuarios cadastrados";

	  // redirecionamento para pagna de loginErro
		header("Location: index.php");
	}

 ?>
