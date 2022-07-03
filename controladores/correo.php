<?php
    if(isset($_REQUEST['btn_enviar'])){

        $nombre = $_REQUEST['txt_nombre'];
        $correo = $_REQUEST['_correo'];
        $asunto = $_REQUEST['_txt_asunto'];
        $mensaje = $_REQUEST['txt_comentario'];

        $enviar= 'pruebaweb.mm@gmail.com';

        $header = 'Enviado desde junta de vecinos Don Mateo';

        $mensajeCompleto = $mensaje . '\nAtentamente: '. $nombre;

        mail($enviar, $asunto, $mensaje, );


    }


?>