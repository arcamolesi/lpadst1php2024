<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>
    <form id="testeMaterialize">
        <div class="row">
            <div class="input-field col s6">
                <input type="text" id="nome" name="nome" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="2" maxlength="20">
                <label for="nome" data-error="Preencha o campo Nome" class="active">Nome</label>
            </div>
            <div class="input-field col s6">
                <input type="number" id="numero" name="numero" class="validate" required pattern="[0-9]+$" required min="1" max="20">
                <label for="numero" data-error="Preencha o campo Numero corretamente" class="active">Numero</label>
            </div>
        </div>
    </form>
</body>

</html>