<?php 
    $dest = "talaverameza@gmail.com"; //Email de destino 
    $nombre = $_POST['name']; 
    $email = $_POST['email']; 
    $asunto = "Gear Projects"; //Asunto 
     $cuerpo = $_POST['comments'].' '." \r\nCorreo: ".$_POST['email']; //Cuerpo del mensaje 
                //Cabeceras del correo 
                $headers = "From: $nombre $email"; //Quien envia? 
                $headers .= "X-Mailer: PHP5n"; 
                $headers .= 'MIME-Version: 1.0' . "n"; 
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn"; // 
  
   if(mail($dest,$asunto,$cuerpo,$headers)){ 
                    $result = '<div class="result_ok">Email enviado correctamente </div>'; 
                    // si el envio fue exitoso reseteamos lo que el usuario escribio: 
                    $_POST['name'] = ''; 
                    $_POST['email'] = ''; 
                    $_POST['subject'] = ''; 
                    $_POST['commets'] = ''; 
                }else{ 
                    $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>'; 
                } 
     header('Location: index.html'); 
    ?> 