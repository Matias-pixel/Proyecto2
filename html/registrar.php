<?php
    
    include("../DAO/usuario.php");
    $con = new DaoUsuario();
    
    if(isset($_REQUEST["btn_enviar"])){
        $rut = $_REQUEST["_rut"];
        $nombre = $_REQUEST["_nombre_usuario"];
        $apellido = $_REQUEST["_apellido_usuario"];
        $f_nacimiento = $_REQUEST["_fecha_n"];
        $sexo = $_REQUEST["_sexo"];
        $estado_civil = $_REQUEST["_estados"];
        $numero = $_REQUEST["_numero"];
        $correo = $_REQUEST["_correo"];
        $contra = $_REQUEST["_pass"];
        $etnia = $_REQUEST["_etnia"];
        $ocupacion = $_REQUEST["_ocupacion"];
        $discapacidad = $_REQUEST["_discapacidad"];
        $vota = $_REQUEST["_habilitado"];

        try {
            $con->insertarUsuario($rut,$contra,$nombre,$apellido,$f_nacimiento,$estado_civil,$numero,$correo,$sexo,$etnia,$ocupacion,$discapacidad,$vota); 
            header("location: ../html/login.php");
        } catch (\Throwable $th) {
            die('El usuario ingresado ya se encuentra registrado');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/styleIntegrante.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" >  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="icon" href="../img/barrio-01-2048x2031.png">

    
    <title>Formulario Usuario</title>

</head>
<body>

        <header>

            <nav>
                <ul>
                    <li><a href="login.php">Salir del registro</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <h1 id="h">Formulario de Usuario</h1>
    <div class="contenedor-con">
                
       

        <div class="formulario">
            <h2>Creacion de Usuario</h2>
            
            <form action="registrar.php" method="post">
                <input type="text" name="_rut" id="rut" placeholder="Ingrese el rut del integrante:">
                <input type="text" name="_nombre_usuario" id="nombre_usuario" placeholder="Nombre del integrante:">
                <input type="text" name="_apellido_usuario" id="apellido_usuario" placeholder="Apellido del integrante:">
                <label for="fecha_n" style="font-size: 14px;">Fecha de nacimiento:</label>
                <input type="date" name="_fecha_n" id="fecha_n"> 
                <p>Sexo: </p>
                
                <select name="_sexo" id="sexo">
                    <option value="otro"></option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>

                <label for="estados">Estado civil:</label>
                <select name="_estados" id="estados" optionlist="autocomplete">
                    <option value="ninguno"></option>
                    <option value="soltero">Soltero</option>
                    <option value="casado">Casado</option>
                    <option value="viudo">Viudo</option>
                </select>
                
                <input type="tel" name="_numero" id="numero" placeholder="Número de contacto:">
                <input type="email" name="_correo" id="correo" pattern=".+@gmail\.com" placeholder="Correo electrónico:" required>
                <input type="password" name="_pass" id="pass" placeholder="contraseña" required>
                <input type="text" name="_etnia" id="etnia" placeholder="Etnia:">
                <label for="ocupacion">Seleccione la ocupacion del integrante:</label>
                <select name="_ocupacion" id="ocupacion" required>
                    <option value="ninguna"></option>
                    <option value="estudiante">Estudiante</option>
                    <option value="t_dependiente">Trabajador dependiente</option>
                    <option value="t_independiente">Trabajador independiente</option>
                    <option value="cesante">Cesante</option>
                </select>
                <label for="discapacidad">Discapacidad:</label>
                <select name="_discapacidad" id="discapacidad" optionlist="autocomplete" required>
                    <option value="ninguna">Ninguna</option>
                    <option value="visual">Visual</option>
                    <option value="desplazamiento">Desplazamiento</option>
                    <option value="mental">Mental</option>
                    <option value="auditiva">Auditiva</option>
                    <option value="motriz">Motriz</option>
                    <option value="habla">Habla</option>
                </select>
                <p>Socio habilitado para votar?</p>
                <select name="_habilitado" id="habilitado">
                    <option value="nada"></option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                <input type="submit" name = "btn_enviar" value="Enviar">

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