<?php
    include 'conexao.php';
    $sql = "select * from departamento;";
    $con = Conexao::conectar(); 
    $lstDpto = $con->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamentos</title>
</head>
<body>
    <h1>Listar Departamentos</h1> 
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($lstDpto as $dpto) {?>
           <tr>
              <td> <?php echo $dpto['id']; ?> </td>
              <td> <?php echo $dpto['descricao']?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>