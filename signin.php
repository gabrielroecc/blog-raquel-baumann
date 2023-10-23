<?php
require './config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null; 

unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Raquel Baumann - Blog</title>
		<link rel="stylesheet" href="<?= ROOT_URL ?>styles/style.css" />
		<link
			rel="stylesheet"
			href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
	</head>
	<body>
		<section class="form_section">
			<div class="container form_section_container">
				<h2>Entrar</h2>
				
				<?php if(isset($_SESSION['signup-success'])) : ?>
					<div class="alert_message success">
						<p>
							<?= $_SESSION['signup-success'];
							unset($_SESSION['signup-success']);
							?>
						</p>
					</div>
				<?php elseif(isset($_SESSION['signin'])) : ?>
				<div class="alert_message error">
						<p>
							<?= $_SESSION['signin'];
							unset($_SESSION['signin']);
							?>
						</p>
					</div>
				<?php endif ?>
				<form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
					<input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Login ou Email" id="" />
					<input type="password" name="password" value="<?= $password ?>" placeholder="Digite sua senha" id="" />

					<button class="btn" name="submit" type="submit">Entrar</button>
					<small>Não tem uma conta? <a href="signup.php">Cadastrar</a></small>
				</form>
			</div>
		</section>
	</body>
</html>
