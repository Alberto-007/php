<?php
include_once "conexao.php";

try {
    // execução da instrução sql_regcase
    $consulta = $conectar->query("SELECT * FROM login");
    echo "<body style='background-color: lightblue; color: #2d383c'><a href='formCadastro.php'>Novo Cadastro</a><br><br>Listagem de Usuários";

    echo "<table border='1' style='background-color: #c6ade6; border: 1px solid #e6bbad'><tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>".$linha["nome"]."</td><td>".$linha["login"]."</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> - <a href='excluir.php'?id=$linha[id]>Excluir</a></td></tr>";
}   echo "</table></body>";

    echo $consulta->rowCount() . " Registros Exibidos";
} catch (PDOException $e) {
    echo $e->getMessage();
}