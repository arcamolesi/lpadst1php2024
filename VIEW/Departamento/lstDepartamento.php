<?php
  namespace VIEW\Departamento;
  include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\conexao.php';
  $sql = "select * from departamento;";
  $con = \DAL\Conexao::conectar();
  $registros = $con->query($sql);
  $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
     <title>Listar Departamento</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Departamentos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>

        <?php foreach ($registros as $linha) { ?>
            <tr>
                <td> <?php echo $linha['id']; ?> </td>
                <td> <?php echo $linha['descricao'] ?> </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>