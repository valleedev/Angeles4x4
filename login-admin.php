<?php
session_start();

require_once("conexion.php");
//***************************************************************************
//Preguntamos si el usuario existe en la base de datos

$sql="select nombre_usuario from users
				  where
                  nombre_usuario='".$_POST["nombre_usuario"]."'"; 

//Con este comando ejecutamos la consulta 

$resultado = mysqli_query($con, $sql);

//Preguntamos si devolvió algún registro

if (mysqli_num_rows($resultado) == 0)
{
	echo "<script type='text/javascript'>
		alert('".$_POST["nombre_usuario"].", no est\u00E1s registrado en la web, solicita un registro en la sección de contacto!');
		window.location='logueo_administrativo.php';
	</script>";
}else

{
//******************************************************************************
//Ahora preguntamos en el login y el password coinciden en la base de datos

$consulta="select * from  users
				    where
                   		 nombre_usuario='".$_POST["nombre_usuario"]."'
                    and
						contrasena='".$_POST["contrasena"]."' ";

$result = mysqli_query($con, $consulta);

if (mysqli_num_rows($result) == 0)
{
	echo "<script type='text/javascript'>
		alert('El usuario y la contrase\u00F1a no coinciden, intenta nuevamente');
		window.location='logueo-administrativo.php';
	</script>";
}else
{
//******************************************************************************
//Ahora le damos acceso a nuestros contenidos restringidos
	$_SESSION["users"]=$_POST["nombre_usuario"];
	header("Location: pagina-admin.php");
//******************************************************************************
}
//******************************************************************************
}

?>


