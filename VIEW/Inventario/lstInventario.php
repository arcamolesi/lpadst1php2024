<?php
include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Inventario.php';


$bllInv = new \BLL\Inventario();
$lstInv = $bllInv->Select();
if 
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Inventario</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Inventario</h1>

   <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Software</th>
            <th>Equipamento</th>
            <th>Instalação</th> 
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formInventario.php'">add</i></a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2"><i
                        class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
            </th>
        </tr>

        <?php foreach ($lstInv as $inv) { ?>
            <tr>
                <td><?php echo $inv->getId(); ?></td>
                <td><?php echo $inv->getSoftware(); ?></td>
                <td><?php echo $inv->getEquipamento(); ?></td>
                <td><?php echo $inv->getInstalacao(); ?></td>
               
            </tr>
        <?php } ?>

    </table>
</body>

</html>
