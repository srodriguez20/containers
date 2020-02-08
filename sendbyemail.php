<?php 
            	if(isset($_POST['email'])){
            		$email_to = "arquitectura@arqcon.net";
					$email_subject = "Correo formulario contacto";
            		if(	!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
				
						echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
						echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
						die();
					}
					$email_from= $_POST['email'];
					$email_message = "Detalles del formulario de contacto:\n\n";
					$email_message .= "Nombre: " . $_POST['name'] . "\n";
					$email_message .= "E-mail: " . $_POST['email'] . "\n";
					$email_message .= "Mensaje: " . $_POST['message'] . "\n\n";
					$headers = 'From: '.$email_from."\r\n".
					'Reply-To: '.$email_from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
					@mail($email_to, $email_subject, $email_message, $headers);
					
					echo "¡El formulario se ha enviado con éxito!";
					die();
				}
				header("Location:contact.html");
				exit();
            
?>