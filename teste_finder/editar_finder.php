<?php
	$id = $_GET['id'];
	$link = mysqli_connect(""localhost","root","","db_finder"");
	$result = mysqli_query($link,"SELECT * FROM finder WHERE id='$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc ($result);
	$id_cliente = $resultado['id'];

 ?>
    <div class="container theme-showcase" role="main">

      <div class="page-header">
        <h1>Editar Serviço</h1>
      </div>
      <div class="row">
				<div class="col-md-12">
				<form class="form-horizontal" method="post" action="processo/edit_finder.php" enctype="multipart/form-data">



					        <div class="form-group">
					          <label for="inputEmail3" class="col-sm-2 control-label">Titulo:</label>
					          <div class="col-sm-10">
					          <input type="text" class="form-control" name="titulo" placeholder="Nome do seu Negocio" required>
					        </div>
					      </div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Telefone:</label>
									<div class="col-sm-10">
									<input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Endereço:</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
							</div>
						</div>

						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">CEP:</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" name="cep" placeholder="00000-00" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Cidade:</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
					</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Estado:</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="estado" placeholder="Estado" required>
					</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">DESCRICAO:</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="descricao" placeholder="DESCRICAO" required>
					</div>
					</div>

					          <!-- Lista Itens da Tabela Categoria -->
										<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Categoria:</label>
										<div class="col-sm-10">
										<select class="form-control" name="id_categoria">
										<option >Selecione...</option>
					          <?php #Comando para listar as categorias dos produtos cadastrado na tabela categoria
					          $resultado = mysqli_query($link,"SELECT * FROM categoria");
					          while($dados = mysqli_fetch_assoc($resultado)){
					          ?>
					          <<option value="<?php echo $dados['id'];?>"><?php echo $dados['cad_nome']; ?></option>
					          <?php } ?>
										</select>
										</div>
									  </div>
										<br>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit"  class="btn btn-success">Editar</button>
				    </div>
				  </div>
				</form>
      </div>
      </div>
    </div> <!-- /container -->
