<?php
// Conexão com o Banco de Dados usando mysqli_connect()
    $conexao = mysqli_connect(
        "localhost",
        "root",
        "",
        "php_project"
    );
// Definindo os caracteres como UTF-8
    mysqli_set_charset($conexao, "utf8");
?>
