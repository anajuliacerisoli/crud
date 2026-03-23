<?php

include("conexao.php");
$sql = "SELECT * FROM produtod ORDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SYS BRAIA</title>
    </head>
    <body>
        <h1>Cadastro</h1>
        <form action="salvar.php" method="post">
            <label>Nome:</label>
            <input type ="text" name="nome" required>
        </form>
    </body>
</html>