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
		<link rel="shortcut icon" href="img/logo1.svg" type="image/x-icon" />
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

	
		<!-----------------SECTION 1----------------->
		<section class="section-1">
			<div class="conteiner">
				<h2>
					Despertando o poder interior e transformando vidas: Terapias e
					desenvolvimento humano para mulheres e mães.
				</h2>
				<p>
					Imagine uma vida onde você...estou aqui para te guiar neste caminho e
					torna-la a Designer da Sua Própria vida. Vamos juntas?
				</p>
				<a href="#" class="btn">Agendar uma consulta</a>
			</div>
		</section>
		<!-----------------SECTION 2----------------->
		<section class="section-2">
			<div class="conteiner">
				<div class="banner">
					<img src="img/banner2.svg" alt="" />
				</div>
				<div class="content">
					<p>Especialista em Terapias e Desenvolvimento</p>
					<h2>Diferenciais do atendimento</h2>
					<h3>
						Com uma combinação única de PNL, Coaching e Terapias Energéticas, eu
						ajudo mulherecomo você a despertar seus recursos internos, superar
						medos e ansiedade, e viver uma vida plena e com propósito.
					</h3>
					<div class="box-wrapper">
						<div class="box">
							<div>
								<img src="img/icon-acolhimento.svg" alt="" />
							</div>
							<div>
								<h2>Acolhimento</h2>
								<p>
									Aqui, você é vista, ouvida e compreendida. Cada passo que você
									dá em direção ao seu desenvolvimento é celebrado. Você não
									está sozinha nessa jornada, estou aqui para te apoiar.
								</p>
							</div>
						</div>
						<div class="box">
							<div>
								<img src="img/icon-empatia.svg" alt="" />
							</div>
							<div>
								<h2>Empatia</h2>
								<p>
									Entendo os desafios que você enfrenta como mulher. Sei que
									equilibrar todas as demandas da vida pode ser difícil. Por
									isso que quero em te ajudar a encontrar o equilíbrio!
								</p>
							</div>
						</div>
					</div>
					<div class="section-2-btn">
						<a href="" class="main-button box-button">Agendar uma consulta</a>
					</div>
				</div>
			</div>
		</section>
		<!-----------------SECTION 3----------------->
		<section class="section-3">
			<div class="conteiner">
				<h2>Conheça meus produtos</h2>
				<p>Ofereço uma variedade de serviços, incluindo:</p>
				<div class="cards-wrapper">
					<a href="secoes.php"
						><div class="card">
							<img src="img/icon-hipnoterapia.svg" alt="" />
							<p>Hipnoterapia Clínica</p>
						</div></a
					>
					<a href="secoes4.php">
						<div class="card">
							<img src="img/icon-coaching-s-p.svg" alt="" />
							<p>Coaching Sistêmico Personalizado</p>
						</div></a
					>
					<a href="secoes2.php">
						<div class="card">
							<img src="img/icon-coaching-s-p.svg" alt="" />
							<p>Análise de Perfil Comportamental</p>
						</div></a
					>
					<a href="secoes5.php">
						<div class="card">
							<img src="img/icon-coaching-s-p.svg" alt="" />
							<p>Cursos e Workshops</p>
						</div>
					</a>
					<a href="secoes1.php">
						<div class="card">
							<img src="img/icon-coaching-s-p.svg" alt="" />
							<p>Áudios Terapeuticos</p>
						</div></a
					>
					<!-- <div class="card">
						<img src="img/icon-coaching-s-p.svg" alt="" />
						<p>Palestras</p>
					</div> -->
					<a href="secoes3.php">
						<div class="card">
							<img src="img/icon-coaching-s-p.svg" alt="" />
							<p>E-books</p>
						</div></a
					>
				</div>
			</div>
		</section>
		<!-----------------SECTION 4 - Conheça Mais----------------->
		<section id="section4" class="section-4">
			<div class="conteiner">
				<div>
					<p>Conhaça mais</p>
					<h2>Raquel Baumann</h2>
					<p>
						Sou hipnoterapeuta clinica especializada em PNL, master coach
						sistêmico, analista de perfil comportamental, terapeuta energética
						(reikiana), mentora de mulheres e mães. Sou casada, mãe de menino e
						adoro ser mãe, sou uma estudiosa, apaixonada pela vida e
						empreendedora. Tenho formação acadêmica em comunicação social-
						jornalismo, atuei como professora durante quase dez anos, e depois
						quando mudei de país e vim morar na Suíça, na cidade de Zurique,
						atuei como professora de português para executivos e empreendedores.
						Estudei também CNV, Gestão emocional e vivo me atualizando sobre os
						temas que fazem parte das minhas práticas diárias. Criei o método
						S.D.S.V-“Seja a Designer da sua vida” para ajudar as mulheres a
						terem clareza sobre os seus sonhos e desejos, estabelecerem metas,
						planejar os seus projetos de maneira clara, objetiva e realmente,
						serem designers de suas próprias vidas. E deste modo, construir uma
						vida leve, prospera, feliz, cheia de propósito e sucesso em todos os
						âmbitos.
					</p>
				</div>
				<div>
					<img src="./img/person1 1.png" alt="" />
				</div>
			</div>
		</section>
		<section class="section-5">
			<div class="conteiner">
				<div><img src="./img/woman.svg" alt="" /></div>
				<div>
					<h2>O método:</h2>
					<p>
						O Método S.D.S.V-“Seja a Designer da sua vida”, foi criado para
						trabalhar todo o consciente sistêmico da mulher, desde a
						mentalidade; o bem-estar físico e emocional; a espiritualidade, além
						de ensina-las a importância de cultivar relacionamentos saudáveis,
						inclusive, com ela mesma. O Método S.D.S.V ensina as mulheres a
						gerenciarem melhor o seu tempo para além de cuidar de suas
						carreiras, ter tempo de qualidade e uma relação saudável com a sua
						família, ainda ter tempo suficiente para o autocuidado e estar em
						sintonia com o feminino. O Método S.D.S.V é usado em coaching
						personalizado ou em grupo, mentorias e palestras.
					</p>
					<a href="#">Agendar agora!</a>
				</div>
			</div>
		</section>
		<div class="review">
			<div class="conteiner">
				<p>Feedbacks</p>
				<h2>Quem conhece, aprova:</h2>
				<div class="reviews-wrapper">
					<div>
						<h2>Zu-Landa</h2>
						<h3>Advogada</h3>
						<img src="img/stars.svg" alt="" />
						<p>
							O Processo de coaching me fez olhar para dentro de mim, descobrir
							minhas forças, fraquezas e sabotadores. &quot;Se você conhece o
							inimigo e conhece a si mesmo, não precisa temer o resultado de cem
							batalhas. &quot; Sun Tzu. Foi uma jornada de muito aprendizado e
							tive acesso a ferramentas incríveis que hoje me auxiliam muito
							para seguir e alcançar minhas metas e objetivos. Aprendi muito e
							continuo aprendendo! Agradeço de coração a oportunidade de ter
							entrado nesse processo com você que é uma excelente profissional,
							competente, está sempre em evolução, serena, me transmite muita
							segurança. Você é Incrível! Muito obrigada, Quel!
						</p>
					</div>
					<div>
						<h2>Julia</h2>
						<h3>Advogada, casada, mãe (Luca 12, Ana 8)</h3>
						<img src="img/stars.svg" alt="" />
						<p>
							“Querida Raquel, muito obrigada novamente por todas as maneiras
							pelas quais você usou para me ajudar a crescer durante nossas
							sessões. O processo foi transformador e o progresso é sentido a
							cada encontro com você. Especialmente em relação às conduções de
							relaxamento e visualizacões que você fez para um reencontro comigo
							mesma ainda criança, foi emocionante. Está claro para mim o quão
							importante foi iniciar a terapia com você nesta fase da minha
							vida, Raquel. Você é uma terapeuta incrível e as ferramentas que
							você usou me ajudou a curar o meu olhar para a minha própria vida,
							me comunicar melhor com a minha família e permanecer comigo no
							aqui e agora.”
						</p>
					</div>
					<div>
						<h2>Feedback de cliente</h2>
						<h3>Casada, mãe</h3>
						<img src="img/stars.svg" alt="" />
						<p>
							Raquel Baumann, você é uma mulher incrível! Muito obrigada pelas
							mudanças positivas que experimento hoje na minha vida pessoal e
							profissional graças aos seus cuidados e do seu olhar atento para
							todo o meu sistema. Eu realmente não tinha noção do grau de
							importância do alinhamento da saúde da minha mente, do meu corpo e
							da minha espiritualidade. Até os meus filhos estavam com sintomas
							de ansiedade antes de te conhecer. Agora com o coração cheio de
							calma e alegria, digo que pode me escrever me perguntando "como
							vocês estão” porque a resposta vei ser firme e segura, “Nós
							estamos muito bem, obrigada Gratidão Raquel. Deus te abençoe
						</p>
					</div>
					<div>
						<h2>Anna T.</h2>
						<h3></h3>
						<img src="img/stars.svg" alt="" />
						<p>
							Querida Raquel, passando por aqui para deixar o meu carinho e
							respeito pelo seu lindo trabalho. Muito obrigada pela sua
							dedicação, paciência e respeito pela minha dor e os meus muitos
							momentos de fraqueza. Sei que não fui uma cliente fácil, sorry...
							mas você não desistiu de mim, também não permitiu que eu perdesse
							a esperança e a fé em mim mesma. Na verdade, foi com você que
							aprendi a ter clareza de quem eu sou e do meu real potencial.
							Através da hipnoterapia e das deliciosas meditação que você
							conduziu com maestria que me tornei uma mulher confiante e
							resgatei o meu senso de propósito. Hoje eu sei lidar melhor
							comigo, com a minha família. Sou eternamente grata pela sua
							orientação e apoio durante todo o processo. Altamente recomendado!
						</p>
					</div>
				</div>
			</div>
		</div>
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
		</footer>
		<script>
			document.querySelector(".menumob").addEventListener("click", ()=>{
				document.querySelector(".ul_mob").classList.toggle('active');

				document.querySelector(".see_more").addEventListener("click", ()=>{
					document.querySelector(".submenu_mob").classList.toggle("active")
				})
			})
		</script>
	</body>
</html>
