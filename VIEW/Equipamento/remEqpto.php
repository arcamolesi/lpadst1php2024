<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Equipamento.php'; 

    $id = $_GET['id']; 

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Delete($id);  
    
    header("location: lstEquipamento.php");
?>