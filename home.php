<?php
    session_start();

    if(!isset($_SESSION["usuario"]) or !isset($_SESSION["senha"]) or !isset($_SESSION["categoria"])){
        session_unset();
        session_destroy();
        header('location: users/login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/contato.css" />
    <meta charset="utf-8">
    <title>Mudanças Climáticas</title>
</head>

<body>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
                <h1>Mudanças Climáticas</h1>
                <h2>Alterações no clima da terra, causas e consequências</h2>
            </hgroup>
            <img src="img/IMG6.png">
            <nav id="menu">
                <h1>Menu Principal</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
					<li><a href="contato.php">Contato</a></li><!-- [ITEM 5] -->
					<li><a href="login.php">Login</a></li><!-- [ITEM 6] -->
					<li><a href="cadastro.php">Cadastro</a></li>
                </ul>
            </nav>
        </header>
        <br><br><br>
        <?php
        require("bd/bd.php");
        if($_SESSION["categoria"] == "Administrador"){
            $sqladm = "SELECT * FROM mensagens";
            $linhasadm = mysqli_query($conexao, $sqladm);
            echo "<legend style='font-size: 32px;'>Tabela de mensagens dos usuários</legend>";
            while($linhaadm = mysqli_fetch_assoc($linhasadm)){
                
                echo "
                    <table border=4>
                    
                        <tr>
                            <td>Id Mensagem</td>
                            <td>Mensagem</td>
                            <td>Boleto Informativo</td>
                            <td>Quantidade de Impressões</td>
                            <td>Total</td>
                        </tr>
                        <tr>
                            <td>$linhaadm[idmensagens]</td>
                            <td>$linhaadm[mensagem]</td>
                            <td>$linhaadm[bol_informat]</td>
                            <td>$linhaadm[qtd_impressoes]</td>
                            <td>$linhaadm[total]</td>
                        </tr>
                    </table>
                ";
            }
        }else{
            echo "<legend>Sua mensagem</legend>";
            echo "
                <table border=4>
                        
                <tr>
                    <td>Id Mensagem</td>
                    <td>Mensagem</td>
                    <td>Boleto Informativo</td>
                    <td>Quantidade de Impressões</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Necessito entrar em contato com o proprietário do site!</td>
                    <td>Sim</td>
                    <td>4</td>
                    <td>18</td>
                </tr>
            </table>
            ";
        }
        ?>
        <br><br><br><br>

        <footer id="rodape">
            <p>Copyright &copy; 2014 - Curso Técnico de Informática <br>
                <a href="https://pt-br.facebook.com/" target="_blank">Facebook</a> | <a href="https://twitter.com/?lang=pt" target="_blank">Twitter</a>
            </p>
            <img src="img/IMG4.png">
        </footer>
    </div>
</body>

</html>