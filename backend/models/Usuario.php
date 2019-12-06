<?php

include '../../database/Conexao.php';

class Usuario extends Conexao
{

    protected $table = 'Usuarios';

    public function listar()
    {
        $sql = "SELECT id, nome, email, DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%s') as data_cadastro FROM usuarios order by nome asc";
        $query = Conexao::prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function insert($obj){    
    	$sql = "INSERT INTO usuarios (nome,email) VALUES (:nome,:email)";
    	$query = Conexao::prepare($sql);
        $query->bindValue('nome',  $obj->nome);
        $query->bindValue('email' , $obj->email);
    	$query->execute();
        return true; //realizar validacao caso aconteca erro ao inserir e nao retorne true
	}


    /*Metodo ainda não sendo chamando pelo controller */
    public function editar($id)
    {
        $sql = "SELECT id, nome, email, DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%s') as data_cadastro FROM usuarios WHERE id = :id";
        $query = Conexao::prepare($sql);
        $query->bindValue('id',  $id);
        $query->execute();
        return $query->fetchAll();
    }

    /*Metodo ainda não sendo chamando pelo controller */
    public function atualizar($obj, $id)
    {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id ";
		$query = Conexao::prepare($sql);
		$query->bindValue('nome', $obj->titulo);
		$query->bindValue('email', $obj->descricao);
		$query->bindValue('id', $id);
		return $query->execute();
    }

    /*Metodo ainda não sendo chamando pelo controller */
    public function excluir($id)
    {
        $sql =  "DELETE FROM usuarios WHERE id = :id";
		$query = Conexao::prepare($sql);
		$query->bindValue('id',$id);
		$query->execute();
    }
}
