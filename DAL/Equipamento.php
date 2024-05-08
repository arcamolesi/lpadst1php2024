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
}

?>