<?php

include '../../models/Usuario.php';

class UsuariosController{

    public function listar(){
        $usuario = new Usuario();
		return $usuario->listar();  
    }

    public function insert($obj){
        $usuario = new Usuario();
		return $usuario->insert($obj);  
    }

    //metodo nao executado
    public function atualizar($obj, $id){
        $usuario = new Usuario();
		return $usuario->atualizar($obj, $id);  
    }

    //metodo nao executado
    public function editar($id){
        $usuario = new Usuario();
		return $usuario->editar($id);  
    }

    //metodo nao executado
    public function excluir($id){
        $usuario = new Usuario();
		return $usuario->excluir($id);  
    }

   

}