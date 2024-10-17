<!DOCTYPE html>
<html lang="es">
<head>
    <title>Aksel VA/dev</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina personal de Aks">
    <meta name="keywords" content="UNAM, FES, Aragón, lamejor, ICO, Computacion" >
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/master.css">
    <script src="./assets/js/cliente.js"></script>

</head>
<body id="cuerpo" >
    <header>
        <h1 style="margin-bottom: 15px; color: green; font-size: 24px; background-color: darkseagreen; " >Mi Página Personal</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="https://www.unam.mx">UNAM</a></li>
                <li><a href="https://aragon.unam.mx">FES Aragón</a></li>
                <li>
                    <ul>
                        <li><a href="code.html">Code</a></li>
                        <li><a href="listas.html">Listas</a></li>
                        <li><a href="links.html">Enlaces e imagenes</a></li>
                        <li><a href="tablas.html">Tablas.html</a></li>
                        <li><a href="formularios.html">Formularios</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        $usuariodb = "admin";
        $contrasenadb  = "patito123";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usr = $_POST["usuario"];
            $pass = $_POST["password"];
            if ($pass === $contrasenadb && $usuariodb===$usr) {
                echo"<h3>Bienvenido , $usr ! </h3>";
        }else{
            echo "<h3> Datos incorrectos </h3>";
        }
    }
        
        ?>
    </main>
    <footer>
        <p>Todos los derechos reservados FES Aragon UNAM 2024</p>
    </footer>

</body>
</html>