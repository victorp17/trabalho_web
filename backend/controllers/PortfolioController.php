<?php

include '../../models/Portfolio.php';

class UsuariosController{

    public function listar(){
        $portfolio = new Portfolio();
		return $portfolio->listar();  
    }

    public function insert($obj){
        $portfolio = new Portfolio();
		return $portfolio->insert($obj);  
    }

    //metodo nao executado
    public function atualizar($obj, $id){
        $portfolio = new Portfolio();
		return $portfolio->atualizar($obj, $id);  
    }

    //metodo nao executado
    public function editar($id){
        $portfolio = new Portfolio();
		return $portfolio->editar($id);  
    }

    //metodo nao executado
    public function excluir($id){
        $portfolio = new Portfolio();
		return $portfolio->excluir($id);  
    }

   

}