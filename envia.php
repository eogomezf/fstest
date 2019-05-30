<?php

$destinatario = "";

$remitente = $_POST['email'];
$destinatario = 'eogomezf@gmail.com'; 
$destinatario2 = 'gfbismatck@gmail.com'; 
$destinatario3 = 'eogomezf@gmail.com'; 
$asunto = 'Consulta de servicios'; 


$cliente = $_POST['email']; 
$asunto2 = '¡Gracias! Su mensaje ha sido recibido!'; 

if (!$_POST){
?>

<?php
}else{
	 
 //    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
 //    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
 // $cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";

  //Para el cliente

    $body  = "<html><body>";
       
    $body .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
       
    $body .= "<tr><td>";
       
    $body .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
        
    $body .= "<thead>
      <tr height='80'>
      <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Consulta de servicios</th>
      </tr>
       </thead>";
        
    $body .= "<tbody>
                <tr>
                 <td colspan='4' style='padding:15px;'>
                   <p style='font-size:25px;'>Nombre:  ".$_POST["name"].",</p>
                   <p style='font-size:25px;'>Correo:  ".$_POST["email"].",</p>
                   <p style='font-size:25px;'>Telefono:  ".$_POST["phone"].",</p>
                  
                   <hr />
                   <p style='font-size:20px;'>".$_POST["subject"]."</spanpn></p><br>
                   <p style='font-size:20px;'>".$_POST["message"]."</spanpn></p>
                  
                   <br>
            
                </td>
               </tr>
            </tbody>";
        
    $body .= "</table>";
       
    $body .= "</td></tr>";
    $body .= "</table>";
       
    $body .= "</body></html>";


    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['name']." \" <".$remitente.">\n";



 //Para el cliente

    $bodyclient  = "<html><body>";
       
    $bodyclient .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
       
    $bodyclient .= "<tr><td>";
       
    $bodyclient .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
        
    $bodyclient .= "<thead>
      <tr height='80'>
      <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >confirmación de correo</th>
      </tr>
                 </thead>";
        
    $bodyclient .= "<tbody>
                <tr>
                 <td colspan='4' style='padding:15px;'>
                   <p style='font-size:25px;'>¡Gracias, ' ".$_POST["name"]."!,</p>
                   <hr />
                   <p style='font-size:20px;'>Tu mensaje esta siendo procesado por nuestros agentes!</p>
                   <p style='font-size:20px;'>Pronto le estaremos respondiendo!</p>
                   <br>
                   <p style='font-size:15px;'>Floegel Servicios</p>
                   <p style='font-size:15px;'>Teléfono: +505 8888-8888</p>
                </td>
               </tr>
                  </tbody>";
        
    $bodyclient .= "</table>";
       
    $bodyclient .= "</td></tr>";
    $bodyclient .= "</table>";
       
    $bodyclient .= "</body></html>";


    $cabecera  = "MIME-Version: 1.0\n";
    $cabecera .= "Content-type: text/html; charset=utf-8\n";
    $cabecera .= "X-Priority: 3\n";
    $cabecera .= "X-MSMail-Priority: Normal\n";
    $cabecera .= "X-Mailer: php\n";
    $cabecera .= "From:floegelservicios <noreplay@floegelservicios.com>\n"; 

    mail($destinatario, $asunto, $body, $headers);
    mail($destinatario2, $asunto, $body, $headers);
    mail($destinatario3, $asunto, $body, $headers);
    //correo de confirmacion al cliente
    mail($remitente, $asunto2, $bodyclient, $cabecera);
    
    include 'index.html'; 
}
?>
