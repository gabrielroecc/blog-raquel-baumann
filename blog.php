<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Raquel Baumann - Blog</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<link
			rel="stylesheet"
			href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
		<script
			src="https://kit.fontawesome.com/5b8396100a.js"
			crossorigin="anonymous"></script>
	</head>
	<body>
		<nav>
			<div class="container nav_container">
				<a href="index.php" class="nav_logo">
					<img src="./images/logo.png" alt="" />
				</a>
				<ul class="nav_items">
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="signin.php">Entrar</a>
					</li>

					<li class="nav_profile">
						<div class="user_img">
							<img src="./images/profile-pic.jpg" alt="" />
						</div>
						<ul>
							<li>
								<a href="dashboard.php">Dashboard</a>
							</li>
							<li>
								<a href="logout.php">Sair</a>
							</li>
						</ul>
					</li>
				</ul>

				<button id="open_nav_btn"><i class="uil uil-bars"></i></button>
				<button id="close_nav_btn"><i class="uil uil-times"></i></button>
			</div>
		</nav>
		<!-- End nav -->
		<!-- Search -->
		<section class="search_bar">
			<form action="" class="container search_container">
				<div>
					<i class="fa-solid fa-magnifying-glass"></i>
					<input type="search" name="" placeholder="Pesquisar" />
				</div>
				<button type="submit" class="btn">Buscar</button>
			</form>
		</section>
		<!-- Search -->
		<!-- Posts -->
		<div class="posts">
			<div class="container posts_container">
				<article class="post">
					<div class="post_thumbnail">
						<img src="./images/thumb.jpg" alt="" />
					</div>
					<div class="post_info">
						<h3 class="post_title">
							<a href="post.php"
								>Lorem ipsum dolor sit amet consectetur adipisicing elit.</a
							>
						</h3>
						<p class="post_body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
							rerum, incidunt blanditiis pariatur necessitatibus placeat
							veritatis, illo quisquam porro corporis perferendis perspiciatis
							ratione? Unde sapiente, incidunt quaerat omnis aut accusantium?
						</p>
						<a class="read_more_post" href="post.php">Ler mais</a>
					</div>
				</article>

				<article class="post">
					<div class="post_thumbnail">
						<img src="./images/thumb.jpg" alt="" />
					</div>
					<div class="post_info">
						<h3 class="post_title">
							<a href="post.php"
								>Lorem ipsum dolor sit amet consectetur adipisicing elit.</a
							>
						</h3>
						<p class="post_body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
							rerum, incidunt blanditiis pariatur necessitatibus placeat
							veritatis, illo quisquam porro corporis perferendis perspiciatis
							ratione? Unde sapiente, incidunt quaerat omnis aut accusantium?
						</p>
						<a class="read_more_post" href="post.php">Ler mais</a>
					</div>
				</article>

				<article class="post">
					<div class="post_thumbnail">
						<img src="./images/thumb.jpg" alt="" />
					</div>
					<div class="post_info">
						<h3 class="post_title">
							<a href="post.php"
								>Lorem ipsum dolor sit amet consectetur adipisicing elit.</a
							>
						</h3>
						<p class="post_body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
							rerum, incidunt blanditiis pariatur necessitatibus placeat
							veritatis, illo quisquam porro corporis perferendis perspiciatis
							ratione? Unde sapiente, incidunt quaerat omnis aut accusantium?
						</p>
						<a class="read_more_post" href="post.php">Ler mais</a>
					</div>
				</article>
			</div>
		</div>
		<!-- Posts -->
		<footer>
			<p>Todos os direitos reservados - Raquel Baumann</p>
		</footer>
	</body>
</html>
