<?php
include_once 'C:\xampp\htdocs\lpadst1php2024\MODEL\Equipamento.php';
include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Equipamento.php';
$id = $_GET['id'];

$bllEqpt = new BLL\Equipamento();
$equipamento = $bllEqpt->SelectByID($id);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Detalhes de Equipamentos</title>
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Detalhes Equipamento</h1>
        </div>

        <div class="input-field col s8 black-text">
            <h5> ID: <?php echo $id; ?> </h5>
            <input type="hidden" name="txtID" value=<?php echo $id; ?>>
            <h5Descrição: <?php echo $equipamento->getDescricao(); ?> </h5>
                <h5>Responsável: <?php echo $equipamento->getResponsavel(); ?> </h5>
                <h5>Departamento: <?php echo $equipamento->getDepartamento(); ?> </h5>
                <h5>Compra: <?php echo $equipamento->getCompra(); ?> </h5>
                <h5>Quantidade: <?php echo $equipamento->getQuantidade(); ?> </h5>
        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" 
            onclick="JavaScript:location.href='formEdtEqpto.php?id=' +
                                         '<?php echo $equipamento->getID();?>'" >
            <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" 
            onclick="JavaScript: remover( <?php echo $equipamento->getId(); ?> )">
            <i class="material-icons">delete</i>
            </button>


            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstEquipamento.php'"><i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Equipamento ' + id + '?')) {
            location.href = 'remEqpto.php?id=' + id;
        }
    }
</script>