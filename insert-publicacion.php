<?php
session_start();
require_once("conexion.php");

$fecha = date('Y-m-d');

// Verificar la carga de archivos
if (isset($_FILES['foto_video']) && $_FILES['foto_video']['error'] === UPLOAD_ERR_OK) {
    $directorioDestino = 'images/';
    $archivoTemp = $_FILES['foto_video']['tmp_name'];
    $nombreArchivo = $_FILES['foto_video']['name'];

    // Obtener la extensión del archivo
    $archivoExtension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

    // Array de extensiones permitidas
    $extensionesPermitidas = array("jpg", "jpeg", "png", "gif", "mp4", "avi");

    // Verificar si la extensión es válida
    if (in_array($archivoExtension, $extensionesPermitidas)) {
        // Mover el archivo al directorio de destino
        move_uploaded_file($archivoTemp, $directorioDestino . $nombreArchivo);

        // Uso de sentencias preparadas para evitar SQL injection
        $sql = "INSERT INTO publicaciones (foto_video, descripcion, fecha) VALUES (?, ?, ?)";
        $statement = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($statement, "sss", $nombreArchivo, $_POST["descripcion"], $fecha);
        $res = mysqli_stmt_execute($statement);

        // Verificar el resultado de la consulta
        if ($res) {
            echo "<script type='text/javascript'>
                    alert('Publicación subida correctamente');
                    window.location='pagina-admin.php';
                  </script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('La publicación no fue subida. Intente nuevamente.');
                    window.location='pagina-admin.php';
                  </script>";
            // Mostrar el error de MySQL en caso de fallo
            echo "Error en la consulta: " . mysqli_error($con);
        }
    } else {
        echo "<script type='text/javascript'>
                alert('Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif) y video (mp4, avi).');
                window.location='pagina-admin.php';
              </script>";
    }
} else {
    echo "Error en la carga del archivo.";
}
?>
