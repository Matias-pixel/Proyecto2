<?php
    require '../DAO/cargo_directivo.php';
    $con = new DaoCargo_directivo();
    if(isset($_REQUEST['btn_enviar'])){
        $nombre = $_REQUEST['nombre_cargo'];
        $con->insertarCargo($nombre);
        echo 'cargo directivo creado con exito!';
        


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

    
    <title>Formulario Cargo Directivo</title>
</head>
<body id="prueba">
    <h1 id="h">Cargo Directivo</h1>


    <div class="contenedor-con">
        
                
       

        <div class="formulario">
            <h2>Ingrese el cargo</h2>
            <br>
            <form action="cargo_directivo.php" method="POST">
                <input type="text" name="nombre_cargo" id="cargo" placeholder="Ingrese el nombre del cargo" required>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <input type="submit" value="Enviar" name="btn_enviar">
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
                <span class="material-icons-outlined">email</span> asistente@gmail.com</p>
       
        </div>
    </div>
    
</body>
</html>