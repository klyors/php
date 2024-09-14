<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="pg.css" type="text/css">
</head>

<body>
    <div class="container">
        <h1>Digite seus dados</h1>
        <form class="row g-3" method="get" action="atividade1.php">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Sexo</label>
                <select id="inputState" class="form-select" name="sexo" required>
                    <option selected>Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Idade</label>
                <input type="number" class="form-control" name="idade" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
    </div>
    </form>

    <?php

if (!empty($_GET['nome'])) {

    if ($_GET['sexo'] == 'Feminino' and $_GET['idade'] < 25) {
        echo "<div id='ac'>Aceito</div>";
    } else {
        echo "acesso negado";
    }
}

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

