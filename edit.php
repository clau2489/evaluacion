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
			<div class="offset-md-3 col-md-6 mt-5">
				<?php
				//Tomo el Id enviado desde el formulario
				$id = $_GET['id'];

				//Conexion a la base de datos 
				require_once ("config/db.php");
				require_once ("config/conexion.php");

                //Consulta SQL				
				$consulta_sql=mysqli_query($conexion,"select * from cliente where id='$id'");

				//Ciclo While que ejecuta una fila por cada registro encontrado 
				while($rw=mysqli_fetch_array($consulta_sql)) {  
					?>  
					<form action="actions/update.php?id=<?php echo $rw['nombre']; ?>" method="post">
						<div class="row">
							<div class="col-md-12">
								<h1>Editar Cliente</h1>			
							</div>
						</div>
						<br>
						<h6>Por favor complete todos los campos</h6>
						<div class="form-group mt-2">
							<label>Nombre *</label>
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required value="<?php echo $rw['nombre']; ?>">
						</div>
						<div class="form-group mt-2">
							<label>Apellido * </label>
							<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required value="<?php echo $rw['apellido']; ?>">
						</div>
						<div class="form-group mt-2">
							<label>Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required value="<?php echo $rw['email']; ?>">
						</div>				  				  
						<div class="form-group mt-2">
							<label>Grupo de Cliente: (Grupo actual: <?php echo $rw['grupodecliente']; ?> )</label>
							<select class="form-control" id="grupocliente" name="grupocliente" required>
								<option value="Grupo A"> Grupo A </option>
								<option value="Grupo B"> Grupo B </option>
								<option value="Grupo C"> Grupo C </option>
							</select>
						</div>
						<div class="form-group mt-2">
							<label>Observaciones</label>
							<textarea type="text" class="form-control" id="observaciones" name="observaciones" required><?php echo $rw['observaciones']; ?></textarea>
						</div>
						<small>* Campos donde no se admiten números</small>
						<div class="form-group mt-2">
							<button type="submit" class="btn btn-primary">Actualizar</button>
							<a href="index.php" class="btn btn-secondary">Cancelar y Volver</a>
						</div>
					</form>
					<?php
				}
				?>					
			</div>
		</div>
	</div>
</body>
</html>