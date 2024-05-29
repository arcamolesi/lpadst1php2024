<?php 
    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];

   // echo "Usuario: " . $usuario . "</br></br>"; 
   // echo "Senha: " . $senha . "  -  ".  md5($senha) . " <br/><br/>";
   // echo "Senha: " . $senha . "  -  ".  sha1($senha) . " <br/><br/>";

   if (md5($senha) == md5("Fema@2024")){
       session_start();
       $_SESSION['login'] = $usuario ;
       header("location:menu.php"); 
    }
    else header("location:index.php"); 

?>