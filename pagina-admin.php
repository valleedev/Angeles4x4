<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["users"])) {
    // Si no ha iniciado sesión, muestra un mensaje de error y finaliza el script.
    echo "Por favor, inicia sesión.";
    exit();
}

$nombreUsuario = $_SESSION["users"];

// Realiza consulta a la base de datos para obtener el nombre completo del usuario.
require_once("conexion.php"); // Se incluye la conexión a la base de datos

$consultaNombreCompleto = "SELECT nombre_completo FROM users WHERE nombre_usuario = ?";
$statement = mysqli_prepare($con, $consultaNombreCompleto);
mysqli_stmt_bind_param($statement, "s", $nombreUsuario);
mysqli_stmt_execute($statement);
$resultadoNombreCompleto = mysqli_stmt_get_result($statement);

if ($fila = mysqli_fetch_assoc($resultadoNombreCompleto)) {
    $nombreCompleto = $fila['nombre_completo'];
}

?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angeles4x4 / Admin</title>
    <link rel="stylesheet" href="css/style_adm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <header class="header">
        <div class="menu container">
            <a href="pagina-principal.html" class="logo">Angeles4x4</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu-regular-24.png" alt="error img" class="menu-icono">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <div class="img-fondo">
        <img src="./img/fondo-adm.jpg" class="fondo-img" alt="Fondo">
    </div>

    <div class="container">

        <div class="perfil">
            <div class="img-perfil">
                <img src="./img/user2.png" alt="user">
            </div>
            <div class="info">
                <h4><?php echo $nombreUsuario; ?></h4>
                <p><?php echo $nombreCompleto; ?></p>
            </div>
        </div>

        <div class="publicar">
            <img src="./img/user2.png" class="user" alt="">
            <form action="insert-publicacion.php" method="post" enctype="multipart/form-data">

                <textarea name="descripcion" placeholder="Breve descripción de la publicación" id="textarea" cols="30" rows="10"></textarea>

                <div class="file-input-container">
                    <label for="file">
                        <span id="file">Archivo:</span>
                    </label>

                    <label for="fichero"></label>
                    <input type='file' id="fichero" name="foto_video" required /><br />
                    <p id="texto"> </p><br />
                    <img id="img" src="" />

                    <input class="submit" type="submit" value="Publicar">
                </div>
            </form>
        </div>

        <footer class="footer">
            <div class="link">
                <p>&copy; derechos reservados / Angeles4x4 / SpaceSistemCode</p>
            </div>
        </footer>

        <script>
            $(document).ready(function () {

                var extensionesValidas = ["png", "gif", "jpeg", "jpg", "mp4", "mov", "avi", "webm"];
                var pesoPermitido = 6030.2646484375;

                // Cuando cambie #fichero
                $("#fichero").change(function () {

                    $('#texto').text('');
                    $('#img').attr('src', '');

                    if (validarExtension(this)) {

                        if (validarPeso(this)) {
                            verImagen(this);
                        }
                    }
                });

                // Validacion de extensiones permitidas
                function validarExtension(datos) {
                    var ruta = datos.value;
                    var extension = ruta.substring(ruta.lastIndexOf('.') + 1).toLowerCase();

                    if (extensionesValidas.indexOf(extension) === -1) {
                        $('#texto').text('La extensión no es válida. Su fichero tiene de extensión: .' + extension);
                        return false;
                    } else {
                        return true;
                    }
                }

                // Validacion de peso del fichero en kbs
                function validarPeso(datos) {

                    if (datos.files && datos.files[0]) {

                        var pesoFichero = datos.files[0].size / 1024;

                        if (pesoFichero > pesoPermitido) {
                            $('#texto').text('El peso máximo permitido del fichero es: ' + pesoPermitido + ' KBs Su fichero tiene: ' + pesoFichero + ' KBs');
                            return false;
                        } else {
                            return true;
                        }
                    }
                }

                // Vista preliminar de la imagen.
                function verImagen(datos) {

                    if (datos.files && datos.files[0]) {

                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#img').attr('src', e.target.result);
                        };

                        reader.readAsDataURL(datos.files[0]);
                    }
                }
            });
        </script>
</body>

</html>
