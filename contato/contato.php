<?php
// Importando arquivo de conexão
require("../bd/bd.php");

// Recebimento dos dados do formulário
    // Usuários
    $nome = $_POST["tnome"];
    $senha = $_POST["tsenha"];
    $email = $_POST["temail"];
    $sexo = $_POST["tsexo"];
    $dat_nasc = $_POST["tnasc"];
    $logradouro = $_POST["trua"];
    $numero = $_POST["tnum"];
    $estado = $_POST["test"];
    $cidade = $_POST["tcid"];

    // Mensagens
    $mensagem = $_POST["tmsg"];
    $boleto = $_POST["tped"];
    $qtdimpress = $_POST["qtdimpress"];
    $total = $_POST["ttot"];

// Insert's das informações nas respectivas tabelas

    // Verificando através de SELECT se o usuário e senha estão corretos
    $sql = "SELECT * FROM usuarios WHERE usuario = '$nome' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) == 0){
        header('location: ../contato.php');
    }else{
        // Insert users  
        $sql_user = "INSERT INTO users (usuario, senha, email, sexo, dat_nasc, logradouro, numero, estado, cidade) VALUES ('$nome', '$senha', '$email', '$sexo', '$dat_nasc', '$logradouro', '$numero', '$estado', '$cidade')";
        $result_user = mysqli_query($conexao, $sql_user);
        
        // Insert mensagens
        $sql_msg = "INSERT INTO mensagens (mensagem, bol_informat, qtd_impressoes, total) VALUES ('$mensagem', '$boleto', '$qtdimpress', '$total')";
        $result_msg = mysqli_query($conexao, $sql_msg);
        header('location: ../index.php');
    }
?>
