<?php
include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Equipamento.php';
use BLL\Equipamento;

$bllEqpt = new \BLL\Equipamento();
$lstEqpto = $bllEqpt->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Equipamentos</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <h1>Listar Equipamentos</h1>

   <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Responsável</th>
            <th>Departamento</th>
            <th>Compra</th>
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                        onclick="JavaScript:location.href='formEquipamento.php'">add</i></a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2"><i
                        class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i></a>
            </th>
        </tr>

        <?php foreach ($lstEqpto as $eqpto) { ?>
            <tr>
                <td><?php echo $eqpto->getId(); ?></td>
                <td><?php echo $eqpto->getDescricao(); ?></td>
                <td><?php echo $eqpto->getResponsavel(); ?></td>
                <td><?php echo $eqpto->getDepartamento(); ?></td>
                <td><?php echo $eqpto->getCompra(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formEdtEqpto.php?id=' + '<?php echo $eqpto->getID(); ?>'">
                        <i class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light blue"
                        onclick="JavaScript:location.href='formDetEqpto.php?id=' + '<?php echo $eqpto->getID(); ?>'"><i
                            class="material-icons">details</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $eqpto->getId(); ?> )">
                        <i class="material-icons">delete</i></a>

                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>


<script>
    function remover(id) {
        if (confirm('Excluir o Equipamento ' + id + '?')) {
            location.href = 'remEqpto.php?id=' + id;
        }
    }
</script>