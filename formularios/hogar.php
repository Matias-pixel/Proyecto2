<?php 

    if(isset($_REQUEST["btn_crear"])){

       
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

    
    <title>Formulario Hogar</title>
</head>
<body id="prueba">

    <h1 id="h">Formulario de Hogar</h1>
    <div class="contenedor-con">
                
        
       

        <div class="formulario">
            <h2>Crea un hogar</h2>
                <br>
                <br>
            <form action="hogar.php" method="POST">
                <input type="text" name="_nombre_calle" id="nombre_calle" placeholder="Nombre de la calle:" required>
                <input type="text" name="_numeracion" id="numeracion" placeholder="Numeración del hogar:" required>
                <label for="sector">Sector:</label >
                
                <select name="_sector" id="sector" required>
                    








                </select>
                <br><br><br><br><br><br><br><br><br>
                <input type="submit" name="btn_crear" value="Crear hogar">
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