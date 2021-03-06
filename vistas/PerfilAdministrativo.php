<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" >  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="icon" href="../img/barrio-01-2048x2031.png">
    <title>Vista administrador</title>
</head>

<body >
    <header >
       
        <nav>
            <ul>
                <li><a href="../formularios/"></a></li>
                <li><a href="../formularios/solicitud_documento.php" target="iframe-carga">Solicitar documento</a></li>
                <li><a href="../formularios/sector.php" target="iframe-carga">Sector</a></li>
                <li><a href="../formularios/comuna.php" target="iframe-carga">Comuna</a></li>
                <li><a href="../formularios/tipo_documento.php" target="iframe-carga">Tipo de documento</a></li>
                <li><a href="../formularios/noticia.php" target="iframe-carga">Noticia</a></li>
                <li><a href="../formularios/ticket.php" target="iframe-carga">Ticket</a></li>
                <li><a href="../crudFeo/cambiar_estado.php" target="iframe-carga">Cambiar cargo</a></li>
                <li><a href="../controladores/cerrar.php">Cerrar sesión</a></li>
               
            </ul>
        </nav>
    </header>
    <br>


    <section class="ad-contenedor-iframe">
        <iframe name="iframe-carga" src="../formularios/acta_reunion.html" frameborder="0"></iframe>
    </section>
</body>

</html>