<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto / Angeles4x4</title>
    <link rel="stylesheet" href="css/stylecontacto.css">
</head>
<body>

<header class="header">

        <div class="menu container">
            <a href="pagina-principal.php" class="logo">Angeles4x4</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu-regular-24.png" alt="error img" class="menu-icono">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php" class="active">Contácto</a></li>
                </ul>
            </nav>

            <div></div>
        </div>


        <form action="enviar.php" method="post" class="form">

            <h2>Contácto</h2>

            <p type="Nombre:"><input name="nombre" placeholder="Indique su nombre completo..."></p>

            <p type="Email:"><input name="email" placeholder="Indique su email..."></p>

            <p type="Mensaje:"><input name="mensaje" placeholder="Indique su mensaje..."></p>

            <button type="submit" name="enviar">Enviar mensaje</button>
        </form>

    </header>




    <footer class="footer">
        <div class="link">
            <p>&copy; derechos reservados / Angeles4x4 / SpaceSistemCode</p> 
        </div>
    </footer>

</body>
</html>