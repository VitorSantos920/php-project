<!--[AQUI INICIALIZA A ESTRUTURA BÁSICA DO HTML]-->	
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<meta charset="utf-8">
		<title> Mudanças Climáticas</title>
	</head>
	<body>
<!--[AQUI INICIALIZA UMA DIVISÃO (INTERFACE)]-->
		<div id="interface">
<!--[AQUI TEM INÍCIO O CABEÇALHO (HEADER)DA SUA PÁGINA WEB]-->
			<header id="cabecalho">
<!--[AQUI TEM INÍCIO UM GRUPO DE TÍTULOS (GRUPO 1)]-->
				<hgroup>
					<h1>Mudanças Climáticas</h1><!-- [Título Nível 1] -->
					<h2>Entendendo as causas e consequências</h2><!--[Subtítulo Nível 2]--><!--[Subtítulo Nível 2]-->
<!--[AQUI FINALIZA UM GRUPO DE TÍTULOS (GRUPO 1)]-->
				</hgroup>
<!-- [AQUI ENTRA A IMAGEM IMG_1]-->
				<img src="img/IMG1.png">			
<!--[AQUI TEM INÍCIO A ÁREA DE NAVEGAÇÃO(NAV)DA SUA PÁGINA WEB]-->
				<nav id="menu">
<!-- [INICIO DO MENU DE NAVEGAÇÃO SUPERIOR]-->
					<h1>Menu Principal</h1><!-- [Título Nível 1] -->
<!--[AQUI TEM INÍCIO UMA LISTA NÃO ORDENADA]-->
					<ul>
<!--[AQUI TEM INÍCIO AOS ITENS QUE FAZEM PARTE DA LISTA NÃO ORDENADA]-->
						<li><a href="index.php">Home</a></li>
						<li><a href="contato.php">Contato</a></li><!-- [ITEM 5] -->
						<li><a href="login.php">Login</a></li><!-- [ITEM 6] -->
						<li><a href="cadastro.php">Cadastro</a></li>
<!--[AQUI FINALIZA OS ITENS QUE FAZEM PARTE DA LISTA NÃO ORDENADA]-->
<!--[AQUI FINALIZA A LISTA NÃO ORDENADA]-->
					</ul>
<!--[AQUI FINLIZA A ÁREA DE NAVEGAÇÃO(NAV)DA SUA PÁGINA WEB]-->
				</nav>
<!--[AQUI TERMINA O CABEÇALHO (HEADER) DA SUA PÁGINA WEB]-->
			</header>
<!--[AQUI TEM INÍCIO A SEÇÃO (SECTION) DA SUA PÁGINA WEB]-->
			<section id="corpo">
<!--[AQUI TEM INÍCIO A ÁREA DE ARTIGO(ARTICLE)DA SUA PÁGINA WEB]-->
				<article id="noticia-Principal">
<!--[AQUI TEM INÍCIO O CABEÇALHO (HEADER) DO ARTIGO]-->				
					<header id="cabecalho-artigo">
<!--[AQUI TEM INÍCIO UM GRUPO DE TÍTULOS (GRUPO 2)]-->
						<hgroup>
							<h2>Terra > Alterações Climáticas</h2><!-- [Subtítulo Nível 2] -->
							<h1>Saiba tudo sobre as Mudanças Climáticas</h1><!-- [Título Nível 1] --> 
							<h2>por Professor do Técnico de Informática</h2><!-- [Subtítulo Nível 2] -->
							<h3 class="direita">Atualizado em 03/Fevereiro/2014</h3><!-- [Subtítulo Nível 3] -->
<!--[AQUI FINALIZA UM GRUPO DE TÍTULOS (GRUPO 1)]-->
						</hgroup>
<!--[AQUI TERMINA CABEÇALHO (HEADER) DO ARTIGO]-->
					</header>
					<h2>O que são mudanças climáticas?</h2><!-- [Subtítulo Nível 2] -->
<!--[AQUI TEM INICIO UMA DIVISÃO (IMAGEM)]-->
					<div id="imagem">
<!--[AQUI TEM INICIO O PARÁGRAFO 1]-->
						<p>
							As mudanças climáticas são alterações que ocorrem no clima geral do planeta Terra. Estas alterações são verificadas através de registros científicos nos valores médios ou desvios da média, apurados durante o passar dos anos. Elas são produzidas em diferentes escalas de tempo em um ou vários fatores meteorológicos como, por exemplo: temperaturas máximas e mínimas, índices pluviométricos (chuvas), temperaturas dos oceanos, nebulosidade, umidade relativa do ar, etc. Fenômenos naturais ou por ações dos seres humanos são as principais causas dessas alterações.
<!--[AQUI FINALIZA O PARÁGRAFO 1]-->
						</p>
<!-- [AQUI TEM INICIO UMA FIGURE]-->
						<figure class="foto-com-legenda">		
<!-- [AQUI ENTRA A IMAGEM IMG_2]-->
							<img src="img/IMG2.jpg">		
<!-- [AQUI INICIA A LEGENDA DA IMAGEM IMG_2 (FIGCAPTION)]--> 
							<figcaption>	
								<h3>Mundanças Climáticas</h3><!-- [Subtítulo Nível 3] -->
<!--[AQUI TEM INICIO O PARÁGRAFO 2]-->
								<p>
									A distribuição da temperatura em graus Celsius pelo planeta
<!--[AQUI FINALIZA O PARÁGRAFO 2]-->
								</p>
<!-- [AQUI FINALIZA A LEGENDA DA IMAGEM IMG_2 (FIGCAPTION)]--> 
							</figcaption>
<!-- [AQUI FINALIZA FIGURE]-->
						</figure>
<!--[AQUI FINALIZA A DIVISÃO (IMAGEM)]-->
					</div>
					<h2>O Aquecimento Global</h2><!--[Subtítulo Nível 2]--> 
<!--[AQUI TEM INICIO O PARÁGRAFO 3]-->
					<p>
						O aquecimento global é uma consequência das alterações climáticas ocorridas no planeta. O século XX foi o mais quente dos últimos cinco, com aumento de temperatura média entre <b>0,3&deg<!--[CARACTER &deg]-->C</b> e <b>0,6&deg<!--[CARACTER &deg]-->C</b>. Esse aumento pode parecer insignificante, mas é suficiente para modificar todo clima de uma região e afetar profundamente a biodiversidade, desencadeando vários desastres ambientais.
<!--[AQUI FINALIZA O PARÁGRAFO 3]-->	
					</p>
					<h2>Principais Emissores de Metano no Mundo</h2><!--[Subtítulo Nível 2]-->
<!--[AQUI TEM INICIO UMA TABELA]-->
					<table id="tabeladados">
<!--[AQUI INICIA UM CAPTION]-->
						<caption>
							Fonte 
<!--INICIA UMA ABREVIAÇÃO (ABBR COM TÍTULO ="Intergovernmental Panel on Climate Change")-->
							<abbr title="Intergovernmental Panel on Climate Change">
								IPCC
<!--FINALIZA A ABREVIAÇÃO (ABBR COM TÍTULO ="Intergovernmental Panel on Climate Change")-->
							</abbr>
							Tabela 1-54, pág 1.55. 
<!-- INCIA UM SPAN-->
							<span>
								Março/1996
<!-- FINLIZA UM SPAN-->
							</span>
<!--[AQUI FINALIZA UM CAPTION]-->
						</caption>
<!--INICIALIZA UMA LINHA DA TABELA (TR)-->
						<tr>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="esquerdo">
								USA:
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="direito">
								11,0 - 15,03 m&sup3<!--[CARACTER &sup3]-->/ton
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>	
<!--FINALIZA UMA LINHA DA TABELA (TR)-->
						</tr>	
<!--INICIALIZA UMA LINHA DA TABELA (TR)-->
						<tr>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="esquerdo">
								Alemanha:
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="direito">
								 22,4 m&sup3<!--[CARACTER &sup3]-->/ton
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>	
<!--FINALIZA UMA LINHA DA TABELA (TR)-->
						</tr>	
<!--INICIALIZA UMA LINHA DA TABELA (TR)-->
						<tr>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="esquerdo">
								Reino Unido:
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="direito">
								15,3 m&sup3<!--[CARACTER &sup3]-->/ton
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>	
<!--FINALIZA UMA LINHA DA TABELA (TR)-->
						</tr>							
<!--INICIALIZA UMA LINHA DA TABELA (TR)-->
						<tr>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="esquerdo">
								Polônia:
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="direito">
								6,8-12 m&sup3<!--[CARACTER &sup3]-->/ton
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>	
<!--FINALIZA UMA LINHA DA TABELA (TR)-->
						</tr>	
<!--INICIALIZA UMA LINHA DA TABELA (TR)-->
						<tr>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="esquerdo">
								Tchecoslováquia:
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="direito">
								23,9 m&sup3<!--[CARACTER &sup3]-->/ton
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>	
<!--FINALIZA UMA LINHA DA TABELA (TR)-->
						</tr>	
<!--INICIALIZA UMA LINHA DA TABELA (TR)-->
						<tr>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="esquerdo">
								Austrália:
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>
<!--INICIALIZA UMA CÉLULA (TD)-->
							<td class="direito">
								15,6 m&sup3<!--[CARACTER &sup3]-->/ton
<!--FINALIZA UMA CÉLULA (TD)-->
							</td>	
<!--FINALIZA UMA LINHA DA TABELA (TR)-->
						</tr>								 
<!--[AQUI FINALIZA UMA TABELA]-->
					</table>
					<h2>O Efeito Estufa</h2><!-- [Subtítulo Nível 2] --> 
<!--[AQUI TEM INICIO O PARÁGRAFO 4]-->
					<p>
						Efeito Estufa é um mecanismo natural do planeta Terra para possibilitar a manutenção da temperatura numa média de <b>15&deg<!--[AQUI ENTRA UM CARACTER ESPECIAL]-->C</b>, ideal para o equilíbrio de grande parte das formas de vida em nosso planeta. Sem o efeito estufa natural, o planeta Terra poderia ficar muito frio, inviabilizando a vide de muitos animais e vegetais. Curiosidades sobre o Efeito Estufa Atualmente, são despejados no ar cerca de 5 bilhões de toneladas de dióxido de carbono (um dos principais gases causadores do efeito estufa) por ano. Só para termos uma base de comparação, há 100 anos atrás eram lançados cerca de 60 milhões de toneladas deste gás anualmente. Assista o vídeo para uma conscientizaçãoe reflexão sobre problema vivido pela humanidade.
<!--[AQUI FINALIZA O PARÁGRAFO 4]-->
					</p>
<!--[AQUI ENTRA O CONJUNTO DE TAGS REFERENTES AO VÍDEO 1]-->
<!-- [COLOQUE A TAG DE FECHAMENTO NESTE COMENTÁRIO]-->
					<video id="efeito-estufa" controls poster="img/poster_1.jpg">
						<source src="media/Efeito_Estufa.mp4" type="video/mp4"  />
						<source src="media/Efeito_Estufa.webm" type="video/webm" />
						<source src="media/Efeito_Estufa.ogv" type="video/ogg" />
					<video> 
<!--[AQUI TEM INICIO UMA TAG ADRESS]-->
					<address>
						<br><!--[AQUI TEM UMA QUEBRA DE LINHA]-->
						Redigido por: Instrutor de TI<br><!--[AQUI TEM UMA QUEBRA DE LINHA]-->
						Responsável pelo vídeo: Youtube <br><!--[AQUI TEM UMA QUEBRA DE LINHA]-->
						CPD - Centro Profissional Dom Bosco<br><!--[AQUI TEM UMA QUEBRA DE LINHA]-->
<!--[AQUI FINALIZA UMA TAG ADRESS]-->
					</address>
<!--[AQUI FINALIZA A ÁREA DE ARTIGO(ARTICLE)DA SUA PÁGINA WEB]-->
				</article>
<!--[AQUI FINALIZA A SEÇÃO (SECTION) DA SUA PÁGINA WEB]-->
			</section>
<!--[AQUI TEM INICIO O CONTEUDO LATERAL (ASIDE) DA SUA PÁGINA WEB]-->
			<aside id="lateral">
<!--[AQUI TEM INÍCIO UM GRUPO DE TÍTULOS (GRUPO 3)]-->
				<hgroup>
					<h1>Outras Notícias</h1><!-- [Título Nível 1] --> 
					<h2>Vídeo mais recente</h2><!-- [Subtítulo Nível 2] --> 
<!--[AQUI FINALIZA UM GRUPO DE TÍTULOS (GRUPO 3)]-->
				<hgroup>
<!--[AQUI TEM INÍCIO UMA DIVISÃO (VIDEO1)]-->
				<div id="video1">
<!--[AQUI ENTRA O CONJUNTO DE TAGS REFERENTES AO VÍDEO 2]-->
<!-- [COLOQUE A TAG DE FECHAMENTO NESTE COMENTÁRIO]-->
					<video id="outros-videos" controls poster="img/poster_2.jpg">
						<source src="media/O_que_nos_espera_ no_ futuro.mp4" type="video/mp4" />
						<source src="media/O_que_nos_espera_ no_ futuro.webm" type="video/webm" />
						<source src="media/O_que_nos_espera_ no_ futuro.ogv" type="video/ogg" /> 
					</video>	  
<!--[AQUI ENTRA O CONJUNTO DE TAGS REFERENTES AO VÍDEO 3]-->
<!-- [COLOQUE A TAG DE FECHAMENTO NESTE COMENTÁRIO]-->
	<video id="outros-videos" controls poster="img/poster_3.jpg">
	  <source src="media/Camada_de_ Ozonio.mp4" type="video/mp4" />
	  <source src="media/Camada_de_Ozonio.webm" type="video/webm" />
	  <source src="media/Camada_de_ Ozonio.ogv" type="video/ogg" />    
	</video>	 
 <!--[AQUI FINALIZA UMA DIVISÃO (VIDEO1)]-->
				</div>
				<h2>Buraco na Camada de Ozônio</h2><!-- [Subtítulo Nível 2] -->
<!--[AQUI TEM INICIO O PARÁGRAFO 5]-->
				<p>
					Em 1983, pesquisadores fizeram uma descoberta que gerou muita preocupação: havia um buraco na camada de ozônio na área da estratosfera sobre o território da Antártica. Este buraco era de grandes proporções, pois tinha cerca de 10 milhões de quilômetros quadrados. Na década de 1980 outros buracos de menor proporção foram encontrados em vários pontos da estratosfera. Com o passar do tempo, estes buracos foram crescendo (principalmente o que fica sobre a Antártica), sendo que em setembro de 1992 chegou a totalizar 24,9 milhões de quilômetros quadrados.
<!--[AQUI FINALIZA O PARÁGRAFO 5]-->
				</p>
<!--[AQUI INICIA O BLOCKQUOTE]-->
				<blockquote  cite="www.google.com.br">
					"A cada dia. A cada minuto. A cada segundo, nosso planeta está mudando sua temperatura para maior."
<!--[AQUI INICIA O A TAG ADDRESS]-->
					<address>
						por Autor Desconhecido
<!--[AQUI FINALIZA O A TAG ADDRESS]-->					
					</address>
<!--[AQUI FINALIZA O BLOCKQUOTE]-->
				</blockquote>
<!--[AQUI FINALIZA O CONTEUDO LATERAL (ASIDE) DA SUA PÁGINA WEB]-->
			</aside>
<!--[AQUI TEM INÍCIO AO RODAPÉ (FOOTER) DA SUA PÁGINA WEB]-->  
			<footer id="rodape">
<!--[AQUI TEM INICIO O PARÁGRAFO 6]-->
			<p>
				Copyright&copy<!--[CARACTER &copy]--> 2014 - Curso Técnico de Informática<br><!--AQUI ENTRA UMA QUEBRA DE LINHA--><!--AQUI ENTRA O LINK https://pt-br.facebook.com/--><a href=" https://pt-br.facebook.com/" target="_blank">Facebook</a>| <!--AQUI ENTRA O LINK https://twitter.com/?lang=pt-->   <a href="https://twitter.com/?lang=pt" target="_blank">Twitter</a>
<!--[AQUI FINALIZA O PARÁGRAFO 6]-->
			</p>
				<img src="img/IMG4.png">	
			</footer>
		</div>		
	</body>
</html>