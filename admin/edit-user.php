<?php
	include 'partials/header.php';

	if(isset($_GET['id'])){
		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$query = "SELECT * FROM users WHERE id=$id";
		$result = mysqli_query($connection, $query);
		$user = mysqli_fetch_assoc($result);
	}else{
		header('location: ' . ROOT_URL . 'admin/manage-users.php');
		die();
	}
?>
		<section class="form_section">
			<div class="container form_section_container">
				<h2>Edit um usuário</h2>
				<div class="alert_message success">
					<p>Mensagem de sucesso</p>
				</div>
				<form action="<?= ROOT_URL ?>admin/edit-user-logic.php" enctype="multipart/form-data" method="POST">
					<input type="hidden" value="<?= $user['id'] ?>" name="id" placeholder="Nome completo" id="" />
					<input type="text" value="<?= $user['completename'] ?>" name="completename" placeholder="Nome completo" id="" /> 
					<input type="text" name="username" placeholder="Nome de usuário" id="" value="<?= $user['username'] ?>" />
					<input type="text" name="tel" placeholder="Telefone / Whatsapp" id="" value="<?= $user['tel'] ?>" />
					<input type="email" name="email" placeholder="Email" id="" value="<?= $user['email'] ?>" />
					Função
					<select name="userrole">
						<option value="0">Usuário</option>
						<option value="1">Administrador</option>
					</select>
					<button class="btn" type="submit">Atualizar Usuário</button>
				</form>
			</div>
		</section>
		<?php
			include '../partials/footer.php';
		?>
	</body>
</html>
