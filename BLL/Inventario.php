<?php
namespace BLL;
include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\Inventario.php';
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

        ///regras de negócio que dependem do sistema propoto 
        
        return $dalInv->Insert($inv);
    }




}
?>