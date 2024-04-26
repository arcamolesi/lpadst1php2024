<?php
   //exmplo de acesso a dados usando POO por meio
   //de uma classe Model e gerando lista de 
  include_once 'conexao.php';
  include_once './MODEL/Departamento.php';
  
  $sql = "Select * from departamento;"; 
  $con = Conexao::conectar(); 
  $dados = $con->query($sql);
  
  foreach ($dados as $linha){
      $dpto = new \MODEL\Departamento(); 
      $dpto->setId($linha['id']); 
      $dpto->setDescricao($linha['descricao']);
      $lstDpto[] = $dpto; 
  }
   
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamento usando Model</title>
</head>
<body>
    <h1>Listar Departamento</h1>
    <table class="striped centered">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($lstDpto as $dpto) { ?>
           <tr>
              <td><?php echo $dpto->getId(); ?></td>
              <td><?php echo $dpto->getDescricao();?></td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>