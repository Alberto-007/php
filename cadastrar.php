<?php
include_once "conexao.php";

try {
    $id = filter_var($_POST['id']);
    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);

    $insert = $conectar->prepare("INSERT INTO login (id, nome, login) VALUES (:id, :nome, :login)");
    $insert->bindParam(":id", $id);
    $insert->bindParam(":nome", $nome);
    $insert->bindParam(":login", $login);
    $insert->execute();

    header("location: index.php");
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}