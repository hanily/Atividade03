<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb02'; ?>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Area</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Area</h1>
            </div>
        </div>
        <form action="<?php echo $path; ?>/repositorio/area/salvarArea.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="nomeArea">Nome da Area</label>
                    <input class="form-control" type="text" name="nomeArea" id="idArea">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
</body>

</html>