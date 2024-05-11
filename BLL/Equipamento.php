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

}
?>