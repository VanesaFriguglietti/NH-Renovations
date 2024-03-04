<?php
	include("conexion.php");
	
	if(isset($_POST['contact'])){
		if(strlen($_POST['name']) >= 1 &&
		   strlen($_POST['email']) >= 1 &&
		   strlen($_POST['address']) >= 1 &&
		   strlen($_POST['subject']) >= 1 &&
		   strlen($_POST['message']) >= 1 
		   ){
		   	$name = trim($_POST['name']);
		    $email = trim($_POST['email']);
            $address = trim($_POST['address']);
		    $subject = trim($_POST['subject']);
		    $message = trim($_POST['message']);
		    $dates = date("Y-m-d H:i:s");
		    

		    $consulta = "INSERT INTO datos(name , email , address , subject , message , dates)
		    			 VALUES ('$name', '$email', '$address', '$subject', '$message', '$dates')";
		    			
		    $resultado = mysqli_query($conex, $consulta);
		    			$destinatario = "adrian@nh-renovations.com";
                        $asunto = "Envio desde NH-renovations";
                        $cuerpo = '
                        <html>
                        <head>
                        <title> Prueba de envio de correo</title>

                        </head>
                        <body>
                        <h1> Hola Adrian, '.$name.' te envio el siguente mensaje</h1>
                        <h2> Contacto: ' .$name . ' <br>
                             Email: ' .$email . ' <br>
                             Address: ' .$address .' <br>
                             Subject: ' .$subject .' <br>
                        Mensaje: '.$message. '
                        </h2> 
                        </html>';
                            //para el envio en formato html
                            $headers = "MIME-Version: 1.0\r\n";
                            $headers .= "Content-type: text/html; charset=UTF8\r\n";


                            //direccion del remitente

                            $headers .= "FROM: $name <$email>\r\n";
                            $mail = @mail($destinatario,$asunto,$cuerpo,$headers);

                            //$header = "X-Mailer: PHP/" . phpversion();
		                    //$mail = @mail($email, $subject, $message, $header);
		                    if ($mail){
			                echo "<h4>enviado exitosamente</h4>";

		                    }
		    	if($consulta) {
?>
		    		<script type="text/javascript">
		    		 alert("Enviado");
  					window.location.href = "index.php";
  					</script>
   <?php
	

	}
	


}else{
		?>
		<script type="text/javascript">
		alert("Debes completar los campos");
		</script>
        <?php 
}   
}

	?>	


		*/
	  