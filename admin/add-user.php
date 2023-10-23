<?php
	include 'partials/header.php';

	$completename = $_SESSION['add-user-data']['completename'] ?? null;
	$username = $_SESSION['add-user-data']['username'] ?? null;
	$tel = $_SESSION['add-user-data']['tel'] ?? null;
	$email = $_SESSION['add-user-data']['email'] ?? null;
	$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
	$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;
	$picture = $_SESSION['add-user-data']['picture'] ?? null;
	$userrole = $_SESSION['add-user-data']['userrole'] ?? null;

	unset($_SESSION['user-data']);
	
?>
		<section class="form_section">
			<div class="container form_section_container">
				<h2>Adicionar um usuário</h2>
				<?php
					if(isset($_SESSION['add-user'])) : ?>
					<div class="alert_message error">
					<p><?= $_SESSION['add-user'];
					unset($_SESSION['add-user']);
					?>
					</p>
				</div>
				<?php endif ?>
				<form action="<?php echo ROOT_URL; ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">

					<input type="text" name="completename" value="<?= $completename ?>" placeholder="Nome completo" id="" />
					<input type="text" name="username" placeholder="Nome de usuário" id="" value="<?= $username ?>"/>
					<input type="text" name="tel" placeholder="Telefone / Whatsapp" id="" value="<?= $tel ?>"/>
					<input type="email" name="email" placeholder="Email" id="" value="<?= $email ?>"/>
					<input type="password" name="createpassword" placeholder="Criar senha" id="" value="<?= $createpassword ?>"/>
					<input type="password" name="confirmpassword" placeholder="Confirmar senha" id="" value="<?= $confirmpassword ?>"/>
					Função
					<select name="userrole">
						<option value="0">Usuário</option>
						<option value="1">Administrador</option>
					</select>

					<div class="form_control">
						<label for="picture"></label>
						<input type="file" name="picture" id="picture" value="<?= $picture ?>"/>
					</div>
					<button class="btn" name="submit" type="submit">Criar Usuário</button>
				</form>
			</div>
		</section>
		<?php
			include '../partials/footer.php';
		?>
	</body>
</html>
