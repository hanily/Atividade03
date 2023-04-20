<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2'; ?>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Campus</h1>
            </div>
        </div>
        <form action="<?php echo $path; ?>/repositorio/campus/salvarCampus.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nomeCampus" id="idnome">
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idcep">CEP</label>
                    <input class="form-control" type="number" name="cep" id="idcep">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-md-4">
                    <label class="form-label" for="idrua">Rua</label>
                    <input class="form-control" type="text" name="rua" id="idrua">
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idbairro">Bairro</label>
                    <input class="form-control" type="text" name="bairro" id="idbairro">
                </div>
                <div class="col col-md-3">
                    <label class="form-label" for="idcidade">Cidade</label>
                    <input class="form-control" type="text" name="cidade" id="idcidade">
                </div>
                <div class="col col-md-1">
                    <label class="form-label" for="iduf">UF</label>
                    <input class="form-control" type="text" name="uf" id="iduf">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
</body>

</html>