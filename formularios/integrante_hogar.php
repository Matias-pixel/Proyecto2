<?php
    include("../controladores/conexion.php");
    if(isset($_REQUEST["btn_enviar"])){
        $integrante = $_REQUEST["_integrante"];
        $tipo = $_REQUEST["_tipo"];
        $parentesco = $_REQUEST["_parentesco"];

        session_start();
        $rut = $_SESSION["rut"];
        
        $sqlIdUser = "SELECT id FROM usuario where rut = '$rut'";
        $resultId = $conex->query($sqlIdUser);
        $id;

        if ($resultId->num_rows > 0 ) {
            # code...
            while ($row = $resultId->fetch_assoc()) {
                # code...
                $id = $row['id'];
                
            }
        }

        $sqlTiene = "SELECT count(integrante_hogar.id) 
        FROM hogar
        INNER JOIN integrante_hogar ON hogar.id = integrante_hogar.hogar_id_fk
        INNER JOIN usuario ON integrante_hogar.usuario_id_fk = usuario.id
        WHERE usuario.id = '$id'";

        $cont = current($conex->query($sqlTiene)->fetch_assoc());

        if ($cont < 0 ) {
            # code...
            echo  "es tu primer hogar creado";
        }else{
            echo "no es tu primer hogar";

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">

    
    <title>Formulario Integrante Hogar</title>
</head>
<body id="prueba">

    <h2 id="h">Formulario de Integrante - Hogar</h2>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Asigne</h2>
            <form action="" method="POST">
                <input type="text" name="_integrante" id="integrante" placeholder="Integrante">
                <input type="text" name="_tipo" id="tipo" placeholder="Tipo de integrante">
                <label for="parentezco">Ingrese el parentezco</label>
                <select name="_parentesco" id="parentezco">
                    <option value=""></option>
                    <option value="hijo">Hijo/a</option>
                    <option value="conyuge">cónyuge</option>
                    <option value="tio">Tío/a </option>
                    <option value="abuelo">abuelo/a</option>
                    <option value="sinParentezco">Sin relación</option>
                    
                </select>
                

                <input type="submit" name="btn_enviar" value="Enviar">
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