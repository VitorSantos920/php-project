<?php
// Importando arquivo de conexão
    include("../bd/bd.php");

// Recebendo dados do formulário
    $usuario = $_POST["user"];
    $senha = $_POST["senha"];
    $categoria = $_POST["tuser"];

// Criptografia de senha...
    //$passHash = password_hash($senha, PASSWORD_DEFAULT);

// Inserção dos dados no Banco de Dados
    $sql = "INSERT INTO usuarios (usuario, senha, categoria) VALUES ('$usuario', '$senha', '$categoria')";
    $result = mysqli_query($conexao, $sql); 
    header('Location: ../index.php'); // Redirecionando ao index.php
?>