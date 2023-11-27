<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angeles4x4/Login ADM</title>
    <link rel="stylesheet" href="css/styleloginadm.css">
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
                <li><a href="index.php">Página principal</a></li>
            </ul>
        </nav>
    </div>


</header>

<div class="header-content container">
        <form action="./login-admin.php" method="post" enctype="multipart/form-data" id="lista-carrito">
            <h3>Ingresar a cuenta administrativa</h3>
            <div class="form first">
                <div class="details personal">
                    <span class="title"></span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="nombre_usuario">Usuario</label>
                            <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="ingrese su  usuario">
                        </div>
                        <div class="input-field">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" id="contrasena" placeholder="Ingrese su contraseña" name="contrasena" required>
                        </div>
                        <button type="submit">Ingresar</button>
                    </div>
                </div>
            </div>
        </form>

        <img class="imagenlog" src="./images/vectorlogin.png" alt="imagen">
    </div>

    
    <footer class="footer">
        <div class="link">
            <p>&copy; derechos reservados / Angeles4x4 / SpaceSistemCode</p> 
        </div>
    </footer>


</body>
</html>
