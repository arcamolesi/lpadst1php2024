<?php 
  include_once 'C:\xampp\htdocs\lpadst1php2024\MODEL\Equipamento.php';
  include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Equipamento.php'; 
  $id = $_GET['id']; 
 // echo 'ID: ' . $id . "</br>";
  
  $bllEqpt = new BLL\Equipamento();
  $equipamento = $bllEqpt->SelectByID($id);

 // echo "Descricao: ". $equipamento->getDescricao() . "</br>";
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Equipamentos</title>
</head>

<body>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Editar Equipamento</h1>
        </div>
        <div class="row  black-text">
            <form action="edtEqpto.php" method="POST" class="col s12">
                 <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $equipamento->getID() ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input placeholder="informe descrição do equipamento" id="descricao" name="txtDesc" type="text" class="validate" value="<?php echo $equipamento->getDescricao();?>">
                    <label id="banana" for="descricao">Descrição</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o responsáve" id="responsavel" name="txtResp" type="text" class="validate" value="<?php echo $equipamento->getResponsavel();?>">
                    <label for="responsavel">Responsável</label>
                </div>
                <div class="input-field col s5">
                    <input placeholder="informe departamento" id="departamento" name="txtDep" type="number" class="validate" value="<?php echo $equipamento->getDepartamento();?>">
                    <label for="departamento">Departamento</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe data da compra" id="compra" name="txtCompra" type="date" class="validate" value="<?php echo $equipamento->getCompra();?>">
                    <label for="compra">Compra</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstEquipamento.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>

</html