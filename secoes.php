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
				<h1>Seções de hipnoterapia</h1>
				<h2>(mínimo pacote com 4 sessões/semanal/online)</h2>
				<img src="img/home-hipnoterapia.svg" alt="" />
				<p>
					<span
						>Desperte Seu Poder Interior com a Hipnoterapia Clínica Online</span
					><br /><br />

					Imagine um caminho onde a ansiedade desaparece, onde a autoconfiança e
					a autoestima florescem, e você se torna a designer destemida da sua
					própria vida, tudo isso a partir do conforto da sua casa. Bem-vinda à
					Hipnoterapia Clínica Online, uma abordagem transformadora que
					desbloqueia seu potencial interior.
					<br /><br />
					<span>Por que Escolher Minhas Sessões de Hipnoterapia Online?</span>
					<br /><br />
					<span>1. Hipnoterapia Clínica Avançada: </span>Minhas sessões de
					hipnoterapia são o núcleo da transformação. Através da hipnose
					clínica, mergulhamos profundamente no seu subconsciente, desmantelando
					as raízes da ansiedade e instalando crenças fortalecedoras de
					autoconfiança e autoestima. Esta transformação é duradoura e acessível
					a partir do seu lar. <br /><br />
					<span>2. Poder da Mente: </span>Como especialista em PNL, acredito no
					incrível poder da mente. Trabalharemos juntas para reprogramar seus
					pensamentos e comportamentos, capacitando você a tomar o controle de
					sua vida e de suas escolhas, tudo isso através de sessões online
					convenientes. <br /><br />
					<span>3. Método S.D.S.V </span>- Seja a Designer da Sua Vida: Meu
					método personalizado é o guia que o levará a traçar metas, planejar
					projetos e se tornar a designer da sua vida. Este método exclusivo se
					combina perfeitamente com a hipnoterapia, criando uma sinergia que
					impulsionará seu sucesso em todas as áreas da sua vida, mesmo à
					distância. <br /><br />
					<span>4. Experiência e Dedicação: </span>Com anos de experiência em
					hipnoterapia e um histórico acadêmico sólido, minha dedicação é
					ajudá-la a alcançar resultados impressionantes, independentemente de
					onde você esteja. <br /><br />
					<span>5. Espaço Seguro e Empático: </span>Ofereço um ambiente seguro,
					onde você se sentirá compreendida e apoiada, mesmo durante nossas
					sessões online. Minha empatia e sororidade garantem que você nunca
					esteja sozinha em sua jornada, mesmo que estejamos virtualmente
					conectadas. <br /><br />
					Agora é o momento de liberar seu potencial máximo, tudo a partir da
					comodidade do seu espaço. Marque sua primeira sessão de hipnoterapia
					clínica online comigo e descubra como a mente tem o poder de criar
					mudanças incríveis, onde quer que você esteja. Desperte o poder
					interior que sempre esteve dentro de você e projete uma vida de
					sucesso, autoconfiança e autoestima, sem sair de casa. Vamos começar
					esta jornada de transformação profunda juntas?
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
