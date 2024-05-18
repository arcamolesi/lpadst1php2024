<?php
namespace BLL;
include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\Equipamento.php';
use DAL;

class Equipamento
{
    public function Select()
    {   
        $dalEqpto = new \DAL\Equipamento();   
        return $dalEqpto->Select();
    }

    public function SelectByID(int $id)
    {   
        $dalEqpto = new \DAL\Equipamento();   
        return $dalEqpto->SelectByID($id);
    }

    public function Insert(\MODEL\Equipamento $equipamento) {
        $dalEqpto = new \DAL\Equipamento();   

        ///regras de negócio que dependem do sistema propoto 
        
        return $dalEqpto->Insert($equipamento);
    }


    public function Update(\MODEL\Equipamento $equipamento) {
        $dalEqpto = new \DAL\Equipamento();   

        ///regras de negócio que dependem do sistema propoto 
        
        return $dalEqpto->Update($equipamento);
    }


}
?>