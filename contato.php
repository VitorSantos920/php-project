<?php
    session_start();

    if(!isset($_SESSION["usuario"]) or !isset($_SESSION["senha"]) or !isset($_SESSION["categoria"])){
        session_unset();
        session_destroy();
        header('location: login.php');
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
            <img src="img/IMG8.png">
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
        <!--[AQUI TEM INICIO O FORMULÁRIO]-->
        <form method="post" action="contato/contato.php">
            <!--[AQUI TEM INICIO O PRIMEIRO GRUPO DE CAMPOS DO FORMULÁRIO]-->
            <fieldset id="usuario">
                <legend>Identificação do Usuário</legend>
                <p>
                    <label for="cnome">Usuário:</label>
                    <input type="text" name="tnome" id="cnome" size="20" maxlength="30" placeholder="Seu usuário..."/>
                </p>
                <p>
                    <label for="csenha">Senha:</label>
                    <input type="password" name="tsenha" id="csenha" size="8" maxlength="8" placeholder="Sua senha..." />
                </p>
                <p>
                    <label for="cemail">E-mail:</label>
                    <input type="email" name="temail" id="cemail" size="20" maxlength="40" placeholder="email@email.com.br" />
                </p>
                <!--[AQUI TEM INICIO O SEGUNDO GRUPO DE CAMPOS DO FORMULÁRIO]-->
                <fieldset id="sexo">
                    <legend>Sexo:</legend>
                    <input type="radio" required name="tsexo" id="cmasc" checked value="Masculino" />
                    <label for="cmasc">Masculino</label>
                    <br>
                    <input type="radio" required name="tsexo" id="cfem" value="Feminino" />
                    <label for="cfem">Feminino</label>
                </fieldset>
                <!--[AQUI FINALIZA O SEGUNDO GRUPO DE CAMPOS DO FORMULÁRIO]-->
                <p>
                    <label for="cnasc">Data de Nascimento:</label>
                    <input type="date" required name="tnasc" id="cnasc" />
                </p>
            </fieldset>
            <!--[AQUI FINALIZA O PRIMEIRO GRUPO DE CAMPOS DO FORMULÁRIO]-->
        <!--[AQUI TEM INICIO O TERCEIRO GRUPO DE CAMPOS DO FORMULÁRIO]-->
            <fieldset id="endereco">
                <legend>Endereço do Usuário</legend>
                <p>
                    <label for="crua"> Logradouro:</label>
                    <input type="text" required name="trua" id="crua" size="13" maxlength="80" placeholder="Endereço" />
                </p>
                <p>
                    <label for="cnum">Número:</label>
                    <input type="number" required name="tnum" id="cnum" min="0" max="9999" />
                </p>
                <p>
                    <label for="cest">Estado:</label>
                    <select name="test" id="cest">
                        <optgroup label="Região sudeste">
                            <option selected value="SP">São Paulo</option>
                            <option selected value="MG">Minas Gerais</option>
                        </optgroup>
                        <optgroup label="Região sul">
                            <option value="PR">Paraná</option>
                            <option value="SC">Santa Catarina</option>
                        </optgroup>
                    </select>
                </p>
                <p>
                    <label for="ccid">Cidade:</label>
                    <input type="text" required name="tcid" id="ccid" size="20" maxlength="30" placeholder="Sua cidade" list="cidades" />
                </p>
                <datalist id="cidades">
                    <option value="Campinas"></option>
                    <option value="Sumaré"></option>
                    <option value="Limeira"></option>
                    <option value="Valinhos"></option>
                </datalist>
            </fieldset>
        <!--[AQUI FINALIZA O TERCEIRO GRUPO DE CAMPOS DO FORMULÁRIO]-->

        <!--[AQUI TEM INICIO O QUARTO GRUPO DE CAMPOS DO FORMULÁRIO]-->
            <fieldset id="mensagem">
                <legend>Mensagem do Usuário</legend>
                <!--<p>
                    <label for="curg">Grau de Urgência: Min</label>
                    <input type="range" name="turg" id="curg" step="5" min="0" max="10" />
                    Max
                </p>-->
                <p>
                    <label for="cmsg"> Mensagem:</label>
                    <textarea name="tmsg" id="cmsg" rows="10" cols="45" required placeholder="Deixe sua mensagem">
                </textarea>
                </p>
            </fieldset>
        <!--[AQUI FINALIZA O QUARTO GRUPO DE CAMPOS DO FORMULÁRIO]-->

        <!--[AQUI TEM INICIO O QUINTO GRUPO DE CAMPOS DO FORMULÁRIO]-->
            <fieldset id="pedido">
                <legend>Boleto Informativo</legend>
                <p>
                    <input type="checkbox" name="tped" id="cped" value="Sim" checked />
                    <label for="cped">Desejo assinar o boleto Informativo</label>
                </p>
                <p>
                    <label for="cqtd">Quantidade de Impresões:</label>
                    <input type="number" name="qtdimpress" min="1" max="100" value="1" />
                </p>
                <!--<p>
                    <label for="ccor">Selecione a cor de Impressão:</label>
                    <input type="color" name="tcor" id="ccor" value="#000FFF" />
                </p>-->
                <p>
                    <label for="ctot">Total R$:</label>
                    <input type="text" name="ttot" id="ctot" placeholder="Valor Total" required />
                </p>
            </fieldset>
        <!--[AQUI FINALIZA O QUINTO GRUPO DE CAMPOS DO FORMULÁRIO]-->
            <button id="enviar" type="submit" name="tenviar"></button>
        </form>
        <!--[AQUI FINALIZA O FORMULÁRIO]-->
        <footer id="rodape">
            <p>Copyright &copy; 2014 - Curso Técnico de Informática <br>
                <a href="https://pt-br.facebook.com/" target="_blank">Facebook</a> | <a href="https://twitter.com/?lang=pt" target="_blank">Twitter</a>
            </p>
            <img src="img/IMG4.png">
        </footer>
    </div>
</body>

</html>