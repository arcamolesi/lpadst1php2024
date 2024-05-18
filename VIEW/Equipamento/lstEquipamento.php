<?php
   include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Equipamento.php'; 
   use BLL\Equipamento; 

   $bllEqpt = new \BLL\Equipamento(); 
   $lstEqpto = $bllEqpt->Select(); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Equipamentos</title>
</head>
<body>
    <h1>Listar Equipamentos</h1>

    <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons" onclick="JavaScript:location.href='formEquipamento.php'">add</i></a>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th>Departamento</th>
            <th>Compra</th>
            <th>Operações</th>
        </tr>
        
        <?php foreach($lstEqpto as $eqpto) { ?>
           <tr>
              <td><?php echo $eqpto->getId(); ?></td>
              <td><?php echo $eqpto->getDescricao();?></td>
              <td><?php echo $eqpto->getResponsavel();?></td>
              <td><?php echo $eqpto->getDepartamento();?></td>
              <td><?php echo $eqpto->getCompra();?></td>
              <td>
              <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdtEqpto.php?id=' + '<?php echo $eqpto->getID();?>'" ><i class="material-icons">edit</i></a>


              </td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>