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
				<h1>Áudios com efeitos terapêuticos</h1>
				<h2>Harmonia Interior com Áudios Terapêuticos</h2>
				<img src="img/audio.jpg" alt="" />
				<p>
					<span
						>Encontre paz, equilíbrio e bem-estar com meus áudios terapêuticos.
						Desfrute de relaxamento profundo, noites de sono revigorantes e
						alívio da ansiedade. Por que Escolher Meus Áudios
						Terapêuticos?</span
					><br /><br />
					<br /><br />
					* Projetados para proporcionar bem-estar e relaxamento profundo,
					acalmando a mente e o corpo em meio à agitação da vida moderna.<br /><br />
					<span>3. Método S.D.S.V </span>- Seja a Designer da Sua Vida: Meu
					método personalizado é o guia que o levará a traçar metas, planejar
					projetos e se tornar a designer da sua vida. Este método exclusivo se
					combina perfeitamente com a hipnoterapia, criando uma sinergia que
					impulsionará seu sucesso em todas as áreas da sua vida, mesmo à
					distância. <br /><br />
					* Crie o ambiente perfeito para um sono tranquilo e saudável,
					despertando revigorada e pronta para enfrentar o dia.<br /><br />
					* Alivie o estresse e a ansiedade com pausas revigorantes, encontrando
					calma e tranquilidade.<br /><br />
					* Promova o equilíbrio em todas as áreas da sua vida, desencadeando um
					florescimento positivo.
					<br /><br />* A escuta consistente nutre sua saúde mental e emocional,
					proporcionando benefícios transformadores.<br /><br />
					<span
						>Invista em sua paz interior e bem-estar. Deixe-se levar pela magia
						da terapia sonora e do relaxamento profundo. Permita-se florescer em
						todos os aspectos da sua vida através da regularidade
						transformadora.</span
					>
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
