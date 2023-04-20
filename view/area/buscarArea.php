<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb02'; ?>

<head>
    <meta charset="UTF-8">
    <title>Busca de Area</title>

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
                <h1>Busca de Area</h1>
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
                $sql = "select * from area";
                $resultado = $conexao->query($sql);
                if($resultado->rowCount() > 0){
                    ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome da Área</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($linha = $resultado->fetch()){
                        echo "<tr>";
                            echo "<td>" . $linha['idArea'] . "</td>";
                            echo "<td>" . $linha['nomeArera'] . "</td>";
                            echo "<td><a href=\"../../repositorio/area/removerArea.php?idArea=". $linha['idArea'] ."\" class=\"btn btn-danger\">Remover</a></td>";
                            echo "<td><a href=\"editarArea.php?idArea=". $linha['idArea'] ."\" class=\"btn btn-secondary\">Editar</a></td>";
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