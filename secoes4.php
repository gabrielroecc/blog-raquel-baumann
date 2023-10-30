<?php
	require 'config/database.php';

	$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
	$posts = mysqli_query($connection, $query);
?><!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Raquel Baumann</title>
		<link rel="stylesheet" href="styles/stylesite.css" />
		<link rel="stylesheet" href="styles/var.css" />
		<link rel="stylesheet" href="styles/secoes.css" />
		<link rel="shortcut icon" href="img/logo.svg" type="image/x-icon" />
	</head>
	<body>
		<!-----------------HEADER----------------->
		<header class="header_desk">
			<div class="conteiner">
				<nav class="nav_desk">
					<a href="index.php" class="logo">
						<img src="<?= ROOT_URL ?>img/logo1.svg" alt="" />
					</a>
					<ul>
						<li><a href="">Produtos</a>
							<ul class="submenu">
								<li class="submenu-item"><a href="secoes.php">Hipnoterapia Clínica</a></li>
								<li><a href="secoes2.php">Coaching Sistêmico Personalizado</a></li>
								<li><a href="secoes3.php">Análise de Perfil Comportamental</a></li>
								<li><a href="secoes4.php">Cursos e Workshops</a></li>
								<li><a href="secoes5.php">Áudios Terapeuticos</a></li>
								<li><a href="secoes5.php">E-books</a></li>
							</ul>
						</li>
						<li><a href="blog-home.php">Meu blog</a></li>
						<li><a href="#section4">Sobre mim</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
					<a href="#" class="btn">Agendar uma consulta</a>
				</nav>

				<nav class="nav_mob">
					<a href="index.php" class="logo">
						<img src="<?= ROOT_URL ?>img/logo1.svg" alt="" />
					</a>
					
					<div class="nav_mob_items">
					<img src="./img/menumob.svg" alt="" class="menumob">
					<ul class="ul_mob">
						<li><a href="">Produtos</a><span class="see_more" style="font-size: 10px; margin-left:10px">Ver mais</span>
							<ul class="submenu_mob">
								<li class="submenu-item"><a href="secoes.php">Hipnoterapia Clínica</a></li>
								<li><a href="secoes2.php">Coaching Sistêmico Personalizado</a></li>
								<li><a href="secoes3.php">Análise de Perfil Comportamental</a></li>
								<li><a href="secoes4.php">Cursos e Workshops</a></li>
								<li><a href="secoes5.php">Áudios Terapeuticos</a></li>
								<li><a href="secoes5.php">E-books</a></li>
							</ul>
						</li>
						<li><a href="blog-home.php">Meu blog</a></li>
						<li><a href="#section4">Sobre mim</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
					</div>
				</nav>
			</div>
		</header>
		<main>
			<div class="conteiner">
				<h1>Coaching Sistêmico Online</h1>
				<h2>Transforme Sua Vida com Coaching Sistêmico Online</h2>
				<img src="img/coach.png" alt="" />
				<p>
					Você merece uma vida dos sonhos! Bem-vinda ao Coaching Sistêmico. Com
					minha expertise em Master Coaching, PNL e o Método S.D.S.V - Seja
					Designer da Sua Vida, estou aqui para moldar sua jornada.
					<br /><br />
					<span>Por que Escolher Minhas Sessões de Coaching Online?</span>
					<br /><br />
					<span>1. Método S.D.S.V: </span>Planeje projetos e transforme sonhos
					em realidade, moldando sua vida de acordo com seus desejos.<br /><br />
					<span>2. Expertise em Master Coaching: </span>Supere desafios e
					alcance resultados extraordinários em todas as áreas da vida.<br /><br />
					<span>3. PNL - Programação Neurolinguística: </span>Substitua padrões
					limitantes por crenças fortalecedoras que impulsionam o sucesso,
					apoiando sua jornada única como mulher.<br /><br />
					<span>4. Atendimento Online Conveniente: </span>Obtenha orientação e
					apoio onde estiver, respeitando suas demandas e ritmo.<br /><br />
					Marque sua primeira sessão de coaching sistêmico online e desperte seu
					potencial inexplorado. Assuma o controle da sua narrativa e projete
					uma vida extraordinária.<br /><br />
					Deixe-se levar pela magia da terapia sonora e do relaxamento profundo.
					Permita-se florescer em todos os aspectos da sua vida através da
					regularidade transformadora.
				</p>
				<a href="" class="btn">Agende uma consulta</a>
			</div>
		</main>
		<div class="blog">
			<div class="conteiner">
				<h2>Leia todos os artigos do blog</h2>
				<div class="article_wrapper">
				<?php while($post = mysqli_fetch_assoc($posts)) : ?>
					<div class="article">
					<img class="blog_thumb_site" src="./img/<?= $post['thumbnail'] ?>" alt="" />
						<h2><?= $post['title'] ?></h2>
						<p>
							<?= substr($post['body'], 0, 300) ?>...
						</p>
						<a class="read_more_post" href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">Ler mais</a>
					</div>
					<?php endwhile ?>
				</div>
			</div>
		</div>
		<footer>
			<p>Todos os direitos reservados - Raquel Baumann</p>
		</footer><script>
			document.querySelector(".menumob").addEventListener("click", ()=>{
				document.querySelector(".ul_mob").classList.toggle('active');

				document.querySelector(".see_more").addEventListener("click", ()=>{
					document.querySelector(".submenu_mob").classList.toggle("active")
				})
			})
		</script>
	</body>
</html>
