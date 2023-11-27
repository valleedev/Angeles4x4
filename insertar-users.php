<?php
session_start();
require_once("conexion.php");

echo "Hola mundo";

$directorioDestino = 'img_users/';
$archivoTemp = $_FILES['foto']['tmp_name'];
$nombreArchivo = $_FILES['foto']['name'];
move_uploaded_file($archivoTemp, $directorioDestino.$nombreArchivo);


$sql="insert into users (foto, numero_correo, nombre_completo, nombre_usuario, contrasena) 
values
('$nombreArchivo', '".$_POST["correo"]."','".$_POST["nombre"]."','".$_POST["usuario"]."','".$_POST["password2"]."')";

$res=mysqli_query($con,$sql);

if ($res == 1)
{
		echo "<script type='text/javascript'>
		alert('".$_POST["usuario"]." fue ingresado correctamente');
		window.location='crearadmin.php';
	</script>";
}else
{

	
	echo "<script type='text/javascript'>
		alert('El usuario ".$_POST["nombre"]." no fue ingresado, intente nuevamente');
		window.location='crearadmin.php';
	</script>";
}


if ($res === false) {
    echo "Error: " . mysqli_error($con);
} else {
    echo "<script type='text/javascript'>
    alert('".$_POST["usuario"]." fue ingresado correctamente');
    window.location='insertar_users.php';
    </script>";
}

?>