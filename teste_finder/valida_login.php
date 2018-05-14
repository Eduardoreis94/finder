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

<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha' ];
include_once("conexao.php");


$link = mysqli_connect("localhost","root","","db_finder");
$result = mysqli_query($link,"SELECT * FROM usuario WHERE login='$usuariot'AND senha='$senhat' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "<b>Usuario: </b>".$resultado ['nome'];

if(empty($resultado)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = "<b>Usuário ou Senha Inválido</b>";

	//Manda o usuario para a tela de login
	header("Location: cadastro_finder.php");
}else{
	// Definição dos valores atribuidos na session do user
	$_SESSION['Usernome'] = $resultado ['nome'];
	$_SESSION['Userid'] = $resultado ['id'];
	$_SESSION['NivelAcesso'] = $resultado ['nivel_acesso_id'];

	if($_SESSION['NivelAcesso'] == 1){
			header("Location: admin.php");
	}else{
			header("Location: user.php");
	}


}

 ?>
