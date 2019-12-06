<?php

include '../../database/Conexao.php';

class Usuario extends Conexao
{

    protected $table = 'Usuarios';

    public function listar()
    {
        $sql = "SELECT id, titulo, descricao, DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%s') as data_cadastro FROM portfolio order by nome asc";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function insert($obj){    
    	$sql = "INSERT INTO portfolio (titulo,descricao) VALUES (:titulo,:descricao)";
    	$query = Conexao::prepare($sql);
        $query->bindValue('titulo',  $obj->titulo);
        $query->bindValue('descricao' , $obj->descricao);
    	$query->execute();
        return true; //realizar validacao caso aconteca erro ao inserir e nao retorne true
	}


    /*Metodo ainda não sendo chamando pelo controller */
    public function editar($id)
    {
        $sql = "SELECT id, titulo, descricao, DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%s') as data_cadastro FROM portfolio WHERE id = :id";
        $query = Conexao::prepare($sql);
        $query->bindValue('id',  $id);
        $query->execute();
        return $query->fetchAll();
    }

    /*Metodo ainda não sendo chamando pelo controller */
    public function atualizar($obj, $id)
    {
        $sql = "UPDATE portfolio SET titulo = :titulo, descricao = :descricao WHERE id = :id ";
		$query = Conexao::prepare($sql);
		$query->bindValue('titulo', $obj->titulo);
		$query->bindValue('descricao', $obj->descricao);
		$query->bindValue('id', $id);
		return $query->execute();
    }

    /*Metodo ainda não sendo chamando pelo controller */
    public function excluir($id)
    {
        $sql =  "DELETE FROM portfolio WHERE id = :id";
		$query = Conexao::prepare($sql);
		$query->bindValue('id',$id);
		$query->execute();
    }
}
