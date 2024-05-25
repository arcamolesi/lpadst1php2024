<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Equipamentos</title>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/init.js"></script>
    
    <?php include_once 'C:\xampp\htdocs\lpadst1php2024\BLL\Departamento.php' ?>

</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Inserir Equipamento</h1>
        </div>
        <div class="row  black-text">
            <form action="insEqpto.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe descrição do equipamento" id="descricao" name="txtDesc" type="text"
                        class="validate">
                    <label id="banana" for="descricao">Descrição</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="informe o responsáve" id="responsavel" name="txtResp" type="text"
                        class="validate">
                    <label for="responsavel">Responsável</label>
                </div>

                <div class="input-field col s5">

                    <select name="slcDep">
                        <option value="" disabled selected>Escolha um Departamento</option>
                        <?php
                        $bllDpto = new BLL\Departamento();
                        $lstDpto = $bllDpto->Select(); 

                        foreach ($lstDpto as $dpto) { ?>
                            <option value="<?php echo $dpto->getID(); ?>">
                                <?php echo $dpto->getDescricao(); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label>Informe o Departamento</label>
                </div>


                <div class="input-field col s5">
                    <input placeholder="informe data da compra" id="compra" name="txtCompra" type="date"
                        class="validate">
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