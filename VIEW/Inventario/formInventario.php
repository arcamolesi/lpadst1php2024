<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Inventario</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Departamento.php' ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Inserir Inventario</h1>
        </div>
        <div class="row  black-text">
            <form action="insInventario.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe o id do software" id="software" name="txtSft" type="text"
                        class="validate">
                    <label id="software" for="software">Software</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o id do Equipamento" id="equipamento" name="txtEqpto" type="text"
                        class="validate">
                    <label for="responsavel">Equipamento</label>
                </div>

                <div class="input-field col s5">
                    <input placeholder="informe a data de instalação" id="instalacao" name="txtInst" type="date"
                        class="validate">
                    <label for="compra">Instalação</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstEquipamento.php'">
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