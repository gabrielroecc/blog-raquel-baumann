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
		<section class="dashboard">
			<div class="container dashboard_container">
				<button id="show_sidebar_btn" class="sidebar_toggle">
					<i class="fa-solid fa-arrow-left"></i>
				</button>
				<button id="hide_sidebar_btn" class="sidebar_toggle">
					<i class="fa-solid fa-arrow-right"></i>
				</button>
				<aside>
					<ul>
						<li>
							<a href="add-post.php"
								><i class="fa-solid fa-pen"></i>
								<h5>Criar Post</h5></a
							>
						</li>

						<li>
							<a class="active" href="dashboard.php"
								><i class="fa-solid fa-table-columns"></i>
								<h5>Gerenciar Posts</h5></a
							>
						</li>

						<li>
							<a href="add-user.php"
								><i class="fa-solid fa-user-plus"></i>
								<h5>Adicionar Usuário</h5>
							</a>
						</li>

						<li>
							<a href="manage-users.php"
								><i class="fa-solid fa-user-pen"></i>
								<h5>Gerencias Usuários</h5>
							</a>
						</li>
					</ul>
				</aside>
				<main>
					<h2>Gerenciar Posts</h2>
					<table>
						<thead>
							<tr>
								<th>Título</th>
								<th>Editar</th>
								<th>Deletar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Título</td>
								<td>
									<a href="edit-post.php" class="btn sm">Editar</a>
								</td>
								<td>
									<a href="delete-post.php" class="btn sm danger">Deletar</a>
								</td>
							</tr>

							<tr>
								<td>Título</td>
								<td>
									<a href="edit-post.php" class="btn sm">Editar</a>
								</td>
								<td>
									<a href="delete-post.php" class="btn sm danger">Deletar</a>
								</td>
							</tr>

							<tr>
								<td>Título</td>
								<td>
									<a href="edit-post.php" class="btn sm">Editar</a>
								</td>
								<td>
									<a href="delete-post.php" class="btn sm danger">Deletar</a>
								</td>
							</tr>
						</tbody>
					</table>
				</main>
			</div>
		</section>
		<footer>
			<p>Todos os direitos reservados - Raquel Baumann</p>
		</footer>
		<script src="./scripts/main.js"></script>
	</body>
</html>
