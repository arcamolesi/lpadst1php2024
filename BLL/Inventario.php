<?php
namespace BLL;
include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\Inventario.php';
include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Equipamento.php'; 

use DAL;

class Inventario
{
    public function Select()
    {   
        $dalInv = new \DAL\Inventario();   
        return $dalInv->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalInv = new \DAL\Inventario();   
        return $dalInv->SelectByID($id);
    }

    public function Insert(\MODEL\Inventario $inv) {
        $dalInv = new \DAL\Inventario();   
        
        $bllEqpto = new \bll\Equipamento(); 

        //regra de negócio para somar um no campo quantidade da tabela equipamento
        //com base no equipamento que foi informado no campo de inventário
        $equipamento = $bllEqpto->SelectByID($inv->getEquipamento()); // recupera o equipamento

        // soma 1 no valor do campo quantidade
        $quantidade = $equipamento->getQuantidade(); 
        $quantidade++;  // $quantidade = $quantidadae + $inv->getValorQuantidade(); 
        $equipamento->setQuantidade($quantidade); 

        $bllEqpto->Update($equipamento); //atualiza no banco de dados o registro de equipamento 

        return $dalInv->Insert($inv); // salva o registro de inventárioo
    }




}
?>