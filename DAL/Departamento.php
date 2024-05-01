<?php 
   namespace DAL; //Data Access Layer
   include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\lpadst1php2024\MODEL\Departamento.php';

   class Departamento{
      public function Select(){       
           
         $sql = "Select * from departamento;"; 
         $con = \DAL\Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = \DAL\Conexao::desconectar(); 


         foreach ($registros as $linha){
             $dpto = new \MODEL\Departamento(); 
             $dpto->setId($linha['id']); 
             $dpto->setDescricao($linha['descricao']);
             $lstDpto[] = $dpto; 
         }
         return $lstDpto;
          
      }

      public function SelectId(int $id){}
      public function SelectDesc(string $name){}



   }

?>