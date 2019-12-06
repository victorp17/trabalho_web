<?php

include '../../controllers/UsuariosController.php';
header('Content-type: application/json');


$data = file_get_contents('php://input');
$obj =  json_decode($data);
if(!empty($data)){	
	try {
        $usuario = new UsuariosController();
 		$resposta = $usuario->insert($obj);
 		http_response_code(200);
 		$obj->id = $resposta;
 		echo json_encode($obj);
 	}
 	catch (PDOException $e) {
 		http_response_code(400);
		echo json_encode(array("mensagem" => "Par�metros Inv�lidos"));
	}
}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "N�o foram enviados par�metros"));
}