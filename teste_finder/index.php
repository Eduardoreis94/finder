<?php
	session_start();
  $link = mysqli_connect("localhost","root","","db_finder");
	$resultado= mysqli_query($link, "SELECT * FROM categoria ORDER BY 'id'");
	$linhas=mysqli_num_rows ($resultado);



 ?>
<div class="container theme-showcase" role="main">
<div class="page-header">
  <h1>Seu Negocio</h1>
    <div class="pull-right">
      <form class="form-inline" method="post" action="admin.php?link=1">
       <div class="form-group">

         <input type="text" class="form-control" name="pesquisar" placeholder="Digitie nome do lugar">
       </div>
       <button type="submit" class="btn btn-default">Buscar</button>
     </form>
   </div>
</div>
  </div>
  
<a href="http://localhost/teste_finder/login.php"><button>admin</button></a>

</div>
</div> <!-- /container -->
