<?php

	// Mail settings
	$to = "pablobellver.design@gmail.com";
	$subject = "contact form";

	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

		$content  = "Name: "     . $_POST["name"]    . "\r\n";
		$content .= "Email: "    . $_POST["email"]   . "\r\n";
		$content .= "Message: "  . "\r\n" . $_POST["message"];

		if (mail($to, $subject, $content, $_POST["email"])) {

			$result = array(
				"message" => "¡Gracias! Recibirás mi respuesta en el menor tiempo posible.",
				"sendstatus" => 1
			);

			echo json_encode($result);

		} else {

			$result = array(
				"message" => "Ougth! Algo ha salido mal, intentalo de nuevo.",
				"sendstatus" => 0
			);

			echo json_encode($result);

		}

	}

?>