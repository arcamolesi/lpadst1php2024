<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\Departamento.php';
use DAL;

class Departamento
{
    public function Select()
    {
        $dalDpto = new \DAL\Departamento();
    
        return $dalDpto->Select();
    }
}

?>