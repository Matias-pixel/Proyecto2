
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stilos/stiloLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
    <link rel="icon" href="../img/barrio-01-2048x2031.png">

    <title>Registro</title>
</head>

<body>

    <section class="contenedorUno">
        <header>

            <nav>
                <ul>
                    <li><a href="Index.html">Bienvenida</a></li>
                    <li><a href="seccionNoticias.html">Noticias</a></li>
                    <li><a href="quienesSomos.html">Quienes somos</a></li>
                    <li><a href="galeria.html">Galeria de imagenes</a></li>
                    <li><a href="contactenos.php">Contactenos</a></li>
                    <li><a href="login.php">Registro - Iniciar sesion</a></li>
    
    
                </ul>
            </nav>
        </header>
    </section>

    <section class="contenedorDos">
        <section class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido a junta de vecinos Don Mateo</h2>
                    <p>Si ya posees una cuenta, inicia sesión aquí</p>
                    <button class="sign-up-btn">Iniciar Sesion</button>
                </div>
            </div>
            <form class="formulario" action='registrar.php'>
                <h2 class="create-account">Crear una cuenta</h2>
                <div class="iconos">
                    <div class="border-icon">
                        <i class='bx bxl-instagram'></i>
                    </div>
                    <div class="border-icon">
                        <i class='bx bxl-twitter'></i>
                    </div>
                    <div class="border-icon">
                        <i class='bx bxl-facebook-circle'></i>
                    </div>
                </div>
                <p class="cuenta-gratis">Crear una cuenta gratis</p>
                <input type="submit" value="Registrarse">
            </form>
        </section>
    
        <section class="container-form sign-in">
            <form class="formulario" action="../controladores/validacion.php" method="POST">
                
                <h2 class="create-account">Iniciar Sesion</h2>
                <div class="iconos">
                    <div class="border-icon">
                        <i class='bx bxl-instagram'></i>
                    </div>
                    <div class="border-icon">
                        <i class='bx bxl-twitter'></i>
                    </div>
                    <div class="border-icon">
                        <i class='bx bxl-facebook-circle'></i>
                    </div>
                </div>
                <p class="cuenta-gratis">Ingrese sus credencialesss</p>
                <input type="text" name="txt_rut"  id="name" placeholder="Rut" >
                <input type="password" name="pws_contra" id="pass" placeholder="Contraseña" >
                <input type="submit" value="Enviar" name="btn_enviar">
            </form>
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                    <button class="sign-in-btn">Registrarse</button>
                </div>
            </div>
        </section>
    
    </section>
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
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                
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
    


    
    <script src="../js/script.js"></script>

</body>

</html>