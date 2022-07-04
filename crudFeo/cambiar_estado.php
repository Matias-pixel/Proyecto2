<?php
    require '../DAO/usuario.php';
    $con = new DaoUsuario();
    if(isset($_REQUEST["btn_enviar"])){
        $nombre = $_REQUEST['_usuario'];
        $cargo = $_REQUEST['_cargo'];
        $con->cambiarCargo($nombre,$cargo); 

        echo 'Cargo modificado correctamente';
        
        
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


    <title>cambiar rol</title>
</head>

<body id="prueba">

    <h1 id="h">Cambio del cargo directivo</h1>

    <div class="contenedor-con">


        <div class="formulario">

            <h2>Complete los campos</h2>
            <br>
            <br>

            <form action="cambiar_estado.php" method="POST">
                <label for="">Seleccione el vecino</label>
                <select name="_usuario" id="">
                    <option value=""></option>
                   
                <?php
                    include '../DAO/conexion.php';
                    $sql = "SELECT id,nombre FROM usuario WHERE estado = 1 and cargo_directivo_id_fk = 1 ORDER BY id";
                    $obtener = mysqli_query($con,$sql) or die(mysql_error($con));
                ?>
                <?php
                    foreach ($obtener as $opciones) {
                        ?>
                        <option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre']?></option>
                      
                        <?php
                    }
                ?>
                </select>

                <label for="">Seleccione el nuevo cargo</label>
                <select name="_cargo" id="">
                    <option value=""></option>
                <?php
                    include '../DAO/conexion.php';
                    $sql = "SELECT id,nombre_cargo FROM cargo_directivo WHERE nombre_cargo != 'presidente' ORDER BY id";
                    $obtener = mysqli_query($con,$sql) or die(mysql_error($con));
                ?>
                <?php
                    foreach ($obtener as $opciones) {
                        ?>
                        <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre_cargo']?></option>
                      
                        <?php
                    }
                ?>
                </select>

                <input type="submit" value="cambiar" name='btn_enviar'>
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

</body>

</html>