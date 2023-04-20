<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2'; ?>

<head>
    <meta charset="UTF-8">
    <title>Busca de Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Busca de Campus</h1>
            </div>
        </div>
        <div class="row">
            <?php
            try{
                $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02", "root", "");
            }catch(PDOException $e){
                die('aconteceu um erro: ' . $e->getMessage());
            }

            try{
                $sql = "select * from campus";
                $resultado = $conexao->query($sql);
                if($resultado->rowCount() > 0){
                    ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Campus</th>
                        <th scope="col">CEP</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($linha = $resultado->fetch()){
                        echo "<tr>";
                            echo "<td>" . $linha['idCampus'] . "</td>";
                            echo "<td>" . $linha['nomeCampus'] . "</td>";
                            echo "<td>" . $linha['CEP'] . "</td>";
                            echo "<td><a href=\"../../repositorio/campus/removerCampus.php?idCampus=". $linha['idCampus'] ."\" class=\"btn btn-danger\">Remover</a></td>";
                            echo "<td><a href=\"editarCampus.php?idCampus=". $linha['idCampus'] ."\" class=\"btn btn-secondary\">Editar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
                }
            }catch(PDOException $e){
                die('aconteceu um erro: ' . $e->getMessage());
            }
            ?>
        </div>
    </div>
</body>

</html>