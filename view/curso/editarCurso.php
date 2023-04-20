<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb02'; ?>

<head>
    <meta charset="UTF-8">
    <title>Editar Curso</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Editar Curso</h1>
            </div>
        </div>
        <?php
        try{
            $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02","root","");
        }catch(PDOException $e){
            die("Ocorreu um erro inesperado " . $e->getMessage());
        }

        $idCampus = $_GET['idCurso'];

        try{
            $sql = "select * from curso where idCurso = " . $idCurso;
            $resultado = $conexao->query($sql);
            if($resultado->rowCount() > 0){
                $linha = $resultado->fetch();
           
        ?>
        <form action="<?php echo $path; ?>/repositorio/curso/editarCurso.php" method="POST">
        <input value="<?php echo $linha['idCurso'] ?>" type="text" name="idCurso" id="idCurso" hidden>
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="idCurso">Nome da Area</label>
                    <input class="form-control" value="<?php echo $linha['nomeCurso'] ?>" type="text" name="nome" id="idCurso">
                </div>
            </div>
            <?php 
                }
            }catch(PDOException $e){
                die("Ocorreu um erro " . $e->getMessage());
            }
            ?>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
</body>

</html>