<?php
	session_start();
	session_destroy();

	//Remoce todas informações contida na variaveis globais
	unset(
		$_SESSION['Usernome'],
		$_SESSION['Userid'],
		$_SESSION['NivelAcesso']
	);

	//Redirecionar para pagina de loginErro
	header("location: index.php");

 ?>
