<?php
    require '../DAO/noticia.php';
    $con = new DaoNoticia();
    if(isset($_REQUEST['btn_enviar'])){
        $titulo = $_REQUEST['txt_tituloNoticia'];
        $tipo = $_REQUEST['txt_tipoNoticia'];
        #$fecha = $_REQUEST['fecha-hora'];
        $cuerpo = $_REQUEST['txt_comentario'];
        session_start();
        $usuario_fk = $_SESSION['id_integrante'];
        #EL ESTADO SE DA EN DAO 
        #
        $con->ingresarNoticia($titulo,$tipo,$cuerpo,$usuario_fk);
        session_abort();

        echo 'Noticia creada exitosamente';


    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">


    <title>Noticias</title>
    
</head>

<body id="prueba">

    <h1 id="h">Noticia</h1>

    <div class="contenedor-con">


        <div class="formulario">

            <h2>Ingrese la noticia</h2>
            <br>
            <br>

            <form action="noticia.php" method="POST">
                <input type="text" name="txt_tituloNoticia" id="txt_tituloNoticia" placeholder="Titulo de la noticia:"
                    required>


                <input type="text" name="txt_tipoNoticia" id="txt_tipoNoticia" placeholder="Tipo de noticia: " required>
                <!-- <label for="fecha-hora">Fecha de la noticia:</label>
                <br><br>
                <input type="datetime-local" name="fecha-hora" id="fecha-hora">--> 
                <textarea name="txt_comentario" id="txt_comentario" cols="10" rows="15" placeholder="Noticia" required></textarea>
                <br><br><br><br><br>
            
                <input type="submit" name="btn_enviar" value="enviar" id="btn_enviar"> <button  onclick="redireccion()">Noticias</button>
            </form>

            
         
           


        </div>
        <div class="der">
            <h2 style="text-align: center;">Contactanos</h2>
            <p><span class="material-icons-outlined">location_on</span> Los Fresnos, San Pedro, Rancagua, O'Higgins
                <br><br>
                <span class="material-icons-outlined">call</span> Telefono. +569 38526985
                <br><br>
                <span class="material-icons-outlined">email</span> Administracion@gmail.com
                <br><br>
                <span class="material-icons-outlined">email</span> asistente@gmail.com
            </p>

        </div>
    </div>

    <script src="../js/redireccion.js"></script>

</body>

</html>