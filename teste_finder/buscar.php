<?php
	session_start();
	include_once("seguranca.php");

  $link = mysqli_connect("localhost","root","","db_finder");
		$pesquisar = $_POST['pesquisar'];
	$resultado=mysqli_query($link,"SELECT * FROM finder WHERE Titulo like '%"."$pesquisar"."%' LIMIT 8");
	$linhas=mysqli_num_rows($resultado);
 ?>

<div class="container">




 	<div class="page-header">
 		<h1>Lista de Cliente</h1>
 			<div class="pull-right">
				<form class="form-inline" method="post" action="admin.php?link=1">
	 			 <div class="form-group">
	 				 <label for="exampleInputName2" style="font-size:20px;" >Buscar Lugares:</label>
	 				 <input type="text" class="form-control" name="pesquisar" placeholder="Digite nome do Lugar">
	 			 </div>
	 			 <button type="submit" class="btn btn-default">Buscar</button>
	 		 </form>
		 </div>
 	</div>

 	<div class="row">
 		<div class="col-md-12">
 			<table class="table">
 				<thead>
 					<tr>
 						<th>Titulo</th>

 					</tr>
 				</thead>
 				<tbody>
 					<?php
 						while($linhas = mysqli_fetch_array($resultado)){
 							echo "<tr>";
 								echo "<td>".$linhas['Titulo']."</td>";
 										?>
 								<td>



 							<?php
 									echo "</tr>";
 										}
 										?>

 				</tbody>
 			</table>
 		</div>
 		</div>
</div>
