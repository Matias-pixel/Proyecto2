<?php
    require '../DAO/comuna.php';
    $con = new DaoComuna();

    if(isset($_REQUEST["btn_ingresar"])){
        $nombre = strtolower($_REQUEST["_nombre_usuario"]);
        $region = strtolower($_REQUEST["_region_comuna"]);
        

        $numero = $con->contar($nombre,$region);
        if($numero < 1){
            $con->insertarComuna($nombre,$region);
            echo 'Comuna creada con exito!';
        }else{
            echo "No voy a ingresar";
        }

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" >  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">

    
    <title>Formulario Comuna</title>
</head>
<body id="prueba">
    <h1 id="h">Formulario de Comuna</h1>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Crea una comuna</h2>
                <br>
                <br>
            <form action="comuna.php" method="POST">
                <input type="text" name="_nombre_usuario" id="nombre_usuario" placeholder="Nombre de la comuna" required>
                <input type="text" name="_region_comuna" id="region_comuna" placeholder="Región de la comuna:" required>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <input type="submit" name="btn_ingresar" value="Crear comuna"> <button onclick="tablaComuna()">Comunas</button>
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
<script src="../js/redireccion.js"></script>
</body>
</html>