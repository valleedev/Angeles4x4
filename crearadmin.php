<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Angeles4x4 / insertar ADM</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="css/styleinsertadm.css">
</head>
<body>

  
<header class="header">

<div class="menu container">
    <a href="#" class="logo">Angeles4x4</a>
    <input type="checkbox" id="menu">
    <label for="menu">
        <img src="img/menu-regular-24.png" alt="error img" class="menu-icono">
    </label>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Nosotros.php">Nosotros</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contacto.php">Contácto</a></li>
        </ul>
    </nav>

</div>

</header>

	<main>

    <h1 class="title" >Crear un nuevo Administrador</h1>
		<form action="./insertar-users.php" class="formulario" id="formulario" method="post" enctype="multipart/form-data">
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="john123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre Completo</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="John Doe">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>


			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Escriba una contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2" placeholder="************">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Foto -->
			<div class="formulario__grupo" id="grupo__foto">
				<label for="foto" class="formulario__label">Foto</label>
				<div class="formulario__grupo-input">
					<input type="file" class="formulario__input" name="foto" id="foto" placeholder="ingresa una foto">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La foto solo puede ser: JPG, PNG EPG</p>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<input type="submit" class="formulario__btn" value="ENVIAR">
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>

    
    <footer class="footer">
        <div class="link">
            <p>&copy; derechos reservados / Angeles4x4 / SpaceSistemCode</p> 
        </div>
    </footer>

	<!--<script src="js/formulario.js"></script>-->
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>