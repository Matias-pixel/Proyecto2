<?php
    require '../DAO/solicitud_documento.php';
    $con = new DaoSolicitudDocumento();
    if(isset($_REQUEST['btn_enviar'])){
        $retira = $_REQUEST['txt_nombre'];
        $tipo = $_REQUEST['tipo_documento'];
        $folio = $_REQUEST['txt_documentoFolio'];
        $comentario = $_REQUEST['txt_comentario'];
        $tipo_documento = $_REQUEST['tipo_documento'];

        session_start();
       
        $con->ingresarSolicitud($comentario,$folio,$retira,$_SESSION['id_integrante'],$tipo);
        session_abort();


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


    <title>Solicitud documento</title>
</head>

<body id="prueba">

    <h1 id="h">Solicitar Documento</h1>

    <div class="contenedor-con">


        <div class="formulario">

            <h2>Solicita un documento</h2>
            <br>
            <form action="solicitud_documento.php" method="POST">
                <input type="text" name="txt_nombre" id="txt_nombre" placeholder="Nombre del que retira: " required>
                <label for="estados">Tipo de documento solicitado:</label>
                <select name="tipo_documento" id="estados" required>
                    <option value=""></option>
                    <?php
                     include '../DAO/conexion.php';
                     $sql = "SELECT id,nombre FROM tipo_documento WHERE estado = 1 ORDER BY id";
                     $obtener = mysqli_query($con,$sql) or die(mysql_error($con));

                    ?>

                    <?php
                        foreach ($obtener as $opciones) {
                                            ?>
                            <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre']?></option>       
                            <?php
                        }

                    ?>
                </select>
                <input type="text" name="txt_documentoFolio" id="txt_documentoFolio" placeholder="Folio del documento ">
                <textarea name="txt_comentario" id="txt_comentario" cols="10" rows="15" placeholder="Añada un comentario" required="required"></textarea>
                <input type="submit" value="enviar" name="btn_enviar">
            </form>


        </div>
        <div class="der">
            <h2>Información de contacto</h2>
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

</body>

</html>