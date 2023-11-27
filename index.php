
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angeles4x4</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contácto</a></li>
                    <li><a href="logueo-administrativo.php">Administración</a></li>
                </ul>
            </nav>
            <div>
            </div>

        </div>

        <div class="header-content container">
            <div class="header-img">
                <img src="img/pexels-mart-production-7218342.jpg" alt="" height="350px">
            </div>
            <div class="header-txt">
                <h1>Potencia en terrenos dificiles</h1>
                <p>Cruzando límites con Angeles4x4</p>
                <a href="Nosotros.php" class="btn-1">Información</a>
            </div>

        </div>

    </header>



    <main class="products container" id="lista-1">

        <h2>Nuestros Ángeles</h2>

        <div class="product-content" id="product-content">

        <?php


        // Incluye el archivo de conexión a la base de datos
        require_once('conexion.php');

        // Realiza una consulta SQL para obtener los datos de la tabla "publicaciones"
        $query = "SELECT * FROM publicaciones ORDER BY id_publicaciones desc";
        $result = mysqli_query($con, $query);


if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="product">';

        $fotoVideo = $row['foto_video'];
        $fileInfo = pathinfo($fotoVideo);

        //Obtiene la extensión del archivo
        $fileExtension = pathinfo($fotoVideo, PATHINFO_EXTENSION);

        if (in_array($fileExtension,['jpg', 'jpeg', 'png', 'gif'])) {
            // Es una imagen
            echo '<img src="images/' . $fotoVideo . '" alt="Imagen">';
        } elseif (in_array($fileExtension,['mp4', 'avi', 'mov'])) {
            // Es un video
            echo '<video src="images/' . $fotoVideo . '" controls  width="400" height="300"></video>';
        } else {
            // Tipo de archivo no compatible
            echo 'Tipo de archivo no compatible';
        }

        // Muestra la descripción y la fecha
        echo '<p>' . $row['descripcion'] . '</p>';
        echo '<p>Fecha: ' . $row['fecha'] . '</p>';
        echo '</div>';
    }

    mysqli_free_result($result);
} else {
    echo 'Error al consultar la base de datos: ' . mysqli_error($con);
}

mysqli_close($con);



        ?>
            
        </div>

    </main>


    <footer class="footer">
        <div class="link">
            <p>&copy; derechos reservados / Angeles4x4 / SpaceSistemCode</p> 
        </div>
    </footer>


    <script src="script.js"></script>
</body>
</html>