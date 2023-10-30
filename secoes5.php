<?php
	require 'config/database.php';

	$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
	$posts = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
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
				<h1>Descubra Sua Verdadeira Potência: descubra o seu pode interior</h1>
				<h2>
					Prepare-se para uma jornada de desenvolvimento pessoal profundo.
				</h2>
				<img src="img/workshop.png" alt="" />
				<p>
					<span>Por que Escolher o Curso?</span><br /><br />

					Exploração Profunda: Descubra paixões, talentos e propósito de vida.
					<br /><br />
					Desenvolvimento Pessoal: Supere obstáculos, vença autossabotagens e
					fortaleça a autoestima.
					<br /><br />
					Ferramentas Práticas: Aprenda a estabelecer metas, gerenciar tempo e
					cultivar uma mentalidade de sucesso.<br /><br />
					<span>2. Poder da Mente: </span>Como especialista em PNL, acredito no
					incrível poder da mente. Trabalharemos juntas para reprogramar seus
					pensamentos e comportamentos, capacitando você a tomar o controle de
					sua vida e de suas escolhas, tudo isso através de sessões online
					convenientes. <br /><br />
					Comunidade de Apoio: Junte-se a outras mulheres para compartilhar
					experiências e conquistas.<br /><br />
					Missão de Transformação: Crie mudanças profundas e duradouras em sua
					vida. Comprometa-se com seu crescimento. Junte-se a mim e abrace sua
					verdadeira potência para uma vida de sucesso e realização.
				</p>
				<a
					href=""
					class="btn"
					style="width: 250px !important; max-width: 250px !important"
					>EM BREVE</a
				>
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
