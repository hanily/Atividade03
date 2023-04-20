<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nomeCurso = $_POST['nomeCurso'];
$notaCurso = $_POST['notaCurso'];


try{
    $sql = "insert into curso (nomeCurso, notaCurso) values ('$nomeCurso','$notaCurso')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>