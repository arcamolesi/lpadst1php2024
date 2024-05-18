<?php
namespace DAL;
include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\conexao.php';
include_once 'C:\xampp\htdocs\lpadst1php2024\MODEL\Equipamento.php';

class Equipamento
{
    public function Select()
    {

        $sql = "Select * from equipamento;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $eqpto = new \MODEL\Equipamento();
            $eqpto->setId($linha['id']);
            $eqpto->setDescricao($linha['descricao']);
            $eqpto->setResponsavel($linha['responsavel']);
            $eqpto->setDepartamento($linha['departamento']);
            $eqpto->setCompra($linha['compra']);
            $lstEqpto[] = $eqpto;
        }
        return $lstEqpto;

    }


    public function SelectByID(int $id)
    {
        //recuperar do banco de dados
        $sql = "Select * from equipamento where id=?;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $eqpto = new \MODEL\Equipamento();
        $eqpto->setId($linha['id']);
        $eqpto->setDescricao($linha['descricao']);
        $eqpto->setResponsavel($linha['responsavel']);
        $eqpto->setDepartamento($linha['departamento']);
        $eqpto->setCompra($linha['compra']);
   
        return $eqpto;

    }

    public function Insert(\MODEL\Equipamento $equipamento){
        $sql = "INSERT INTO equipamento (descricao, responsavel, departamento, compra) VALUES ('{$equipamento->getDescricao()}','{$equipamento->getResponsavel()}', '{$equipamento->getDepartamento()}', '{$equipamento->getCompra()}');";
        
        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

       // echo $result->errorCode();
        
        return $result; 

       // echo $equipamento->getDescricao() . "</br>"; 
       // echo $equipamento->getResponsavel() . "</br>";
       // echo $equipamento->getDepartamento() . "</br>";
       // echo $equipamento->getCompra() . "</br>";

    }

    public function Update(\MODEL\Equipamento $equipamento){
        $sql = "UPDATE equipamento SET descricao = ?, responsavel = ?, departamento = ?, compra = ? WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($equipamento->getDescricao(), $equipamento->getResponsavel(), $equipamento->getDepartamento(), $equipamento->getCompra(), $equipamento->getID()));
        $con = Conexao::desconectar();
      
        return $result; 
    }

}

?>