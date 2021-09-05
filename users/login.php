<?php
// Importando arquivo de conexão
    include("../bd/bd.php");

// Recebendo dados do formulário
    $usuario = $_POST["userl"];
    $senha = $_POST["senhal"];
    $categoria = $_POST["tuserl"];


// Verificação dos dados com MySQL instrução

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha = '$senha' AND categoria = '$categoria'";
    $query = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($result) == 0){
        session_unset(); // Desconfigurar as variáveis de sessão,
        session_destroy(); // Destruir a sessão (Sem resíduo na memória/computador)
        header('location: ../login.php');
    }else {
        session_start(); // Inicia a sessão
        // Criando variáveis super globais
        $_SESSION["usuario"] = $usuario; 
        $_SESSION["senha"] = $senha;
        $_SESSION["categoria"] = $categoria;
        header('location: ../home.php');
    }

?>
