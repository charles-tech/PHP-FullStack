<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - DISTINCT</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <h2>Listar as aulas acessadas</h2>
    <?php

    $query_acessos = "SELECT DISTINCT nome_aula, usuario_id FROM acessos WHERE usuario_id=5";
    $result_acessos= $conn->prepare($query_acessos);
    $result_acessos->execute();

    while($row_acesso = $result_acessos->fetch(PDO::FETCH_ASSOC)){
        //var_dump($row_acesso);
        extract($row_acesso);
        echo "ID do usuário: $usuario_id <br>";
        echo "Nome da aula: $nome_aula <br>";
        echo "<hr>";
    }

    ?>
</body>

</html>