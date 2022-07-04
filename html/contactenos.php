<!--En esta pagina veremos lo que es el formulario de "contactenos" donde cualquier persona puede mandar un correo electronico a la junta de vecinos con un mensaje, entonces esta pagina
actua como intermediaria entre el usuario y la junta de vecinos
-->
<!-- Datos importantes
    Form: 

    input:

    -input nombre: Nombre del que envia el mensaje
    -input email: correo electronico del que envia el mensaje
    -text area: El mensaje que desea mandar
    -input enviar: boton que enviara el mensaje

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Elementos de cabezera, indormacion del documento-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Linkeando este archivo a la hoja de estilos externa mediante la etiqueta link-->
    <link rel="stylesheet" href="../stilos/style.css">
    <!-- Usando apis de google para la tipografia y los iconos con la etiqueta link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" >  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <!-- Definiendo una imagen como icono general de la pagina (la que se verá reflejada en el navegador)-->
    <link rel="icon" href="../img/barrio-01-2048x2031.png">
    <!--definiendo el titulo de la pagina-->
    <title>Contactenos</title>
</head>

<!--Dandole un identificador unico "prueba" a la etiqueta para llamarla desde la hoja de estilos-->
<body id="prueba">
    <header >
       
        <nav>
            <ul>
                <!-- Lista que contiene la navegacion de la pagina por el sitio web-->
                
                <!-- Item de lista con la etiqueta de hipervinvulo para ir a la pagina de bienvenida-->
                <li><a href="Index.html">Bienvenida</a></li>
                <!-- Item de lista con la etiqueta de hipervinvulo para ir a la pagina de seccion de noticias-->
                <li><a href="seccionNoticias.html">Noticias</a></li>
                <!-- Item de lista con la etiqueta de hipervinvulo para ir a la pagina de quienes somos-->
                <li><a href="quienesSomos.html">Quienes somos</a></li>
                <!-- Item de lista con la etiqueta de hipervinvulo para ir a la pagina de galeria de imagenes-->
                <li><a href="galeria.html">Galeria de imagenes</a></li>
                <!-- Item de lista con la etiqueta de hipervinvulo para ir a la pagina de contactenos-->
                <li><a href="contactenos.php">Contactenos</a></li>
                <!-- Item de lista con la etiqueta de hipervinvulo para ir a la pagina de Registro e iniciar sesion-->
                <li><a href="login.php">Registro - Iniciar sesion</a></li>

               
            </ul>
        </nav>
    </header>
    <!--Dandole un identificador unico "h" a la etiqueta para llamarla desde la hoja de estilos-->
    <h1 id="h">Contáctenos</h1>

    <!--Inicio del contenedor del formulario y de la clase "der"-->
    <div class="contenedor-con">
                
            <!--La clase "formulario" trabajara como la parte izquiera de la seccion definida por la hoja de estilos-->
            <div class="formulario">
                
                <!-- PRECAUCION: quitar un campo equerido del formulario podría dejar inoperativa a la base de datos-->
                <h2>Ponte en contacto con nosotros</h2>
                <br>
                <br>
                <!-- El usuario debe completar este formulario obligatoriamente para que se cumpla el proposito de la pagina-->
                <!-- Para que el usuario pueda enviar el mensaje a la junta de vecinos debe completar los campos requeridos obligatoriamente (nombre, correo, mensaje)-->
                <form action="contactenos.php" method="POST">
                    <input type="text" name="txt_nombre" id="txt_nombre" placeholder="Nombre: (Obligatorio)" required>

                    <input type="email" name="_correo" id="correo" pattern=".+@gmail\.com" placeholder="Correo electronico:  (Obligatorio)" required>

    

                    <input type="text" name="_txt_asunto" id="txt_asunto" placeholder="Asunto: ">

                    <textarea name="txt_comentario" id="txt_comentario" cols="10" rows="15" placeholder="Ingrese su mensaje" required="required"></textarea>
                    <br>
                    <input type="submit" value="enviar" name='btn_enviar'>
                </form>
                
                
            </div>
            <!--Inicio de la etiqueta que será el lado derecho de la seccion-->
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
    <!--Inicio del footer-->
    <footer>
        <div class="grupoUno">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="" alt="No se encuentra la imagen del logo">
                    </a>
                    
                </figure>
            </div>
            <div class="box">
                <h2>Sobre nosotros</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                
            </div>
            <div class="box">
                <h2>Siguenos en nuestras redes sociales</h2>
                <div class="redes-sociales">
                    <a href="#"><img class="facebook" src="../icons/facebook.png" alt="No se encuentra la imagen"></a>
                    <a href=""><img class="facebook" src="../icons/instagram.png" alt="No se encontro la imagen"></a>
                </div>
            </div>
        </div>
        <div class="grupoDos">
            <small>&copy; 2021 <b>Junta de Vecinos</b> - Todos los derechos reservados</small>
        </div>
    </footer>    
</body>
</html>