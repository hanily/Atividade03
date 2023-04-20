<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idCurso = $_GET['idCurso'];

try{
    $sql = "delete from curso where idCurso = " . $idCurso;
    $conexao->exec($sql);
    echo "Removido com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}
header('Location: ../../view/curso/buscarCurso.php');
?>