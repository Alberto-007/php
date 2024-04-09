<?php

include_once "conexao.php"; 

$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar->query("SELECT * FROM login WHERE id = '$id'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>
<body style="background-color: lightblue; height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center">
<form action="editar.php" method="post">
    Nome: <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>" style="padding: 5px; border-radius: 15px"/><br><br>
    Login: <input type="text" name="login" id="login" value="<?php echo $linha['login'] ?>" style="padding: 5px; border-radius: 15px"/><br><br>
    <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" />
    <input type="submit" value="Editar" style="padding: 10px; border-radius: 15px; background-color: white"/>
</form>
</body>