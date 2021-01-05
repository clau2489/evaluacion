<!DOCTYPE html>
<html>

<head>
	<title>Evaluación Técnica PHP</title>
	<meta charset="utf-8">
	<!-- Autor y Descripcion -->
	<meta name="author" content="Claudio Coronel Milla">
	<meta name="description" content="Pequeño ABM utilizando PHP, Bootstrap, MySQL, AJAX, y Docker.">
	
	<!-- Integracion Hoja de estilos CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/customize.css">	
	<
	<!-- Integracion Bootstrapp -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/Bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	<!--Integracion de Iconos -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<!-- Integracion Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<!-- Integracion Libreria Quicksearch -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
</head>

<body class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1>Lista de Clientes</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<input type="text" id="buscar" class="form-control form-control-sm" placeholder="Escribe para buscar..." />
			</div>
			<div class="col-md-4">
				<a href="add.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Ingresar nuevo Cliente</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mt-5">
				<table id="table" class="table">
					<thead>
						<tr>
							<th scope="col">Nombre</th>
							<th scope="col">Apellido</th>
							<th scope="col">Email</th>
							<th scope="col">Grupo de Cliente</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<?php
					//Conexion a la base de datos
					require_once ("config/db.php");
					require_once ("config/conexion.php");

					//Consulta SQL
					$consulta_sql=mysqli_query($conexion,"select * from cliente order by apellido"); 

					//Ciclo While que ejecuta una fila por cada registro encontrado 
					while($rw=mysqli_fetch_array($consulta_sql)) {  
						?>                
						<tbody>
							<tr>
								<td><?php echo $rw['nombre']; ?></td>
								<td><?php echo $rw['apellido']; ?></td>
								<td><?php echo $rw['email']; ?></td>
								<td><?php echo $rw['grupodecliente']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $rw['id'];?>" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a>
								</td>
								<td>
									<a href="actions/delete.php?id=<?php echo $rw['id'];?>" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i></a>
								</td>                    
								<?php
							}
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<!-- script para mostrar tooltip, texto emergente al hacer hover sobre un boton -->
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
	
	<!--script de busqueda rapida en tabla -->
	<script>
		$("#buscar").keyup(function(){
			_this = this;
	    // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
	    $.each($("#table tbody tr"), function() {
	    	if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
	    		$(this).hide();
	    	else
	    		$(this).show();                
	    });
	});
</script>


</body>
</html>