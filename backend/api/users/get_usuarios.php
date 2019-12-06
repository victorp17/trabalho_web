<?php
include '../../controllers/UsuariosController.php';

header('Content-type: application/json');
$usuario = new UsuariosController();
echo json_encode($usuario->listar());
