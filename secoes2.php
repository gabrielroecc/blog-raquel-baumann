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
				<h1>Anpalise de perfil comportamental</h1>
				<h2>Descubra Sua Identidade Comportamental para o Sucesso</h2>
				<img style="height: 500px;" src="img/comportamento.png" alt="" />
				<p>
					Nossa análise de perfil comportamental revela quem você é, destacando
					seus pontos fortes e direcionando sua jornada.
					<br /><br />
					<span>Por que Escolher Nossa Análise de Perfil?</span>
					<br /><br />
					Autoconhecimento Profundo: Descubra seus traços de personalidade,
					motivações e como você se relaciona com os outros.<br /><br />
					<span>Quatro Perfis:</span><br />- Executora: Orientadas para a ação,
					líderes naturais.<br />
					- Comunicadora: Construtoras de relacionamentos sólidos.<br />
					- Planejadora: Mestres na organização e no planejamento.<br />
					- Analista: Solucionadoras de problemas incríveis.<br /><br />
					Uma Bússola para o Sucesso: Direcione suas energias onde se destaca,
					encontrando um propósito significativo.<br /><br />
					<span>4. Experiência e Dedicação: </span>Com anos de experiência em
					hipnoterapia e um histórico acadêmico sólido, minha dedicação é
					ajudá-la a alcançar resultados impressionantes, independentemente de
					onde você esteja. <br /><br />
					Relacionamentos Melhorados: Aprimore a comunicação e resolva conflitos
					harmoniosamente.<br /><br />
					Progresso Contínuo: A base para o desenvolvimento pessoal contínuo.<br /><br />
					Embarque em uma jornada de autoconhecimento e autoaprimoramento.
					Descubra seu caminho de sucesso e ilumine sua jornada com um profundo
					entendimento de quem você é. Encontre seu lugar no mundo, honrando sua
					singularidade.
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
