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
				<form action="actions/insert.php" method="post">
					<div class="row">
						<div class="col-md-12">
							<h1>Nuevo Cliente</h1>			
						</div>
					</div>
					<h6>Por favor complete todos los campos</h6>
					<br>
					<div class="form-group mt-2">
						<label>Nombre *</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required pattern="[A-Za-z]{1,30}" title="Solo puede usar letras minúsculas y mayúsculas, hasta 30 caracteres">
					</div>
					<div class="form-group mt-2">
						<label>Apellido *</label>
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required pattern="[A-Za-z]{1,30}" title="Solo puede usar letras minúsculas y mayúsculas, hasta 30 caracteres">
					</div>
					<div class="form-group mt-2">
						<label>Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
					</div>				  				  
					<div class="form-group mt-2">
						<label>Grupo de Cliente</label>
						<select class="form-control" id="grupocliente" name="grupocliente" required>
							<option value="Grupo A"> Grupo A </option>
							<option value="Grupo B"> Grupo B </option>
							<option value="Grupo C"> Grupo C </option>
						</select>
					</div>
					<div class="form-group mt-2">
						<label>Observaciones</label>
						<textarea type="text" class="form-control" id="observaciones" name="observaciones" required></textarea>
					</div>
					<small>* Campos donde no se admiten números</small>
					<div class="form-group mt-2">
						<button type="submit" class="btn btn-success">Guardar</button>
						<a href="index.php" class="btn btn-secondary">Cancelar y Volver</a>
					</div>
				</form>					
			</div>
		</div>
	</div>
</body>
</html>