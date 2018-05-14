<?php
	$link = mysqli_connect("localhost","root","","db_finder");
	$resultado=mysqli_query($link,"SELECT * FROM finder ORDER BY 'id'");
	$linhas=mysqli_num_rows ($resultado);

 ?>
<div class="container theme-showcase" role="main">

	<div class="page-header">
		<h1>Lista de Negocios</h1>
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
</div> <!-- /container -->
