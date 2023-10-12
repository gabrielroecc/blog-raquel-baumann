<?php
require 'config/database.php';
?>

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
	</head>
	<body>
		<nav>
			<div class="container nav_container">
				<a href="index.php" class="nav_logo">
					<img src="./images/logo.png" alt="" />
				</a>
				<ul class="nav_items">
					<li>
						<a href="<?= ROOT_URL ?>blog.php">Blog</a>
					</li>
					<li>
						<a href="<?= ROOT_URL ?> signin.php">Entrar</a>
					</li>

					<li class="nav_profile">
						<div class="user_img">
							<img src="./images/profile-pic.jpg" alt="" />
						</div>
						<ul>
							<li>
								<a href="<?= ROOT_URL ?>admin?dashboard.php">Dashboard</a>
							</li>
							<li>
								<a href="<?= ROOT_URL ?>logout.php">Sair</a>
							</li>
						</ul>
					</li>
				</ul>

				<button id="open_nav_btn"><i class="uil uil-bars"></i></button>
				<button id="close_nav_btn"><i class="uil uil-times"></i></button>
			</div>
		</nav>