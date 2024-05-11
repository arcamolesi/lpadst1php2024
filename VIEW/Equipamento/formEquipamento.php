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

    <title>Inserir Equipamentos</title>
</head>

<body>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Inserir Equipamento</h1>
        </div>
        <div class="row  black-text">
            <form action="insEqpto.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe descrição do equipamento" id="descricao" type="text" class="validate">
                    <label for="descricao">Descrição</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o responsáve" id="responsavel" type="text" class="validate">
                    <label for="responsavel">Responsável</label>
                </div>
                <div class="input-field col s5">
                    <input placeholder="informe departamento" id="departamento" type="number" class="validate">
                    <label for="departamento">Departamento</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe data da compra" id="compra" type="date" class="validate">
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