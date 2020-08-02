<?php
    require 'https://fernandoarag.github.io/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();//Define que será usado SMTP
    $mail->IsSMTP(); //Aceitar caracteres especiais
    $mail->CharSet = 'UTF-8';
    //Configurações
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'SSL';
	$mail->True;
	$mail->Host = "smtp.gmail.com"; // SMTP servers
	$mail->Port = 587; 
	$mail->Username = "fernandorag.fullstackdeveloper@gmail.com"; // SMTP username
	$mail->Password = "fullstackdeveloper"; // SMTP password
	$mail->From = "fernandorag.fullstackdeveloper@gmail.com"; // From
	$mail->FromName = "Fernando Aragão - Full Stack Developer" ; // Nome de quem envia o email
	$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
	$mail->WordWrap = 50; // Definir quebra de linha
	$mail->IsHTML = true ; // Enviar como HTML
	$mail->Subject = $assunto ; // Assunto
	$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
	$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

	if($mail->Send()) // Envia o email{	
		echo "Email enviado com sucesso!";
    }	
    else {
        echo 'Erro no envio do email: ' . $mail->ErrorInfo;
    }
?>