<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de Login ">
    <meta name="author" content="Eduardo Reis Web">
    <link rel="icon" href="img/favicon.ico">
    <title>Login Admistrador</title>
		<script type="text/javascript" src="js/jquery.js"/></script>
		<script type="text/javascript" src="js/jquery.mask.min.js"/></script>
		<script type="text/javascript" src="js/jquery.mask.js"/></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
		<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }

}
</script>
  </head>

  <body>
			<?php
				unset(
					$_SESSION['Usernome'],
					$_SESSION['Userid'],
					$_SESSION['NivelAcesso']
				);

			 ?>


    <div class="container">

      <form class="form-signin" method="post" action="valida_login.php">

				<img src="img/logo.png"  class="img-responsive" width="900px">
        <label>Usuario:</label>
        <input type="text" name="usuario" class="form-control" 	placeholder="Digitar Usuario" required autofocus >  </br>

        <label >Senha:</label>
        <input type="password" name="senha"  class="form-control" placeholder="Senha" required>

				<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>
			<p class="text-center text-danger">

				<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
			?>

			</p>
    </div> <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
