<?php
	include '../admin/partials/header.php';

	$current_admin_id = $_SESSION['user-id'];
	$query = "SELECT * FROM users WHERE id != $current_admin_id";

	$users = mysqli_query($connection, $query);
?>

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
							<a href="index.php"
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
							<a class="active" href="manage-users.php"
								><i class="fa-solid fa-user-pen"></i>
								<h5>Gerenciar Usuários</h5>
							</a>
						</li>
					</ul>
				</aside>
				<main>
					<h2>Gerenciar Usuário</h2>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Usuário</th>
								<th>Email</th>
								<th>Telefone</th>
								<th>Admin</th>
							</tr>
						</thead>
						<tbody>
						<?php while($user = mysqli_fetch_assoc($users)) : ?>
							<tr>
								<td><?= $user['completename'] ?></td>
								<td><?= $user['username'] ?></td>
								<td><?= $user['email'] ?></td>
								<td><?= $user['tel'] ?></td>
								<td><?= $user['is_admin'] ? 'Sim' : "Não" ?></td>
							</tr>
							<?php endwhile ?>
						</tbody>
					</table>
				</main>
			</div>
		</section>
		<?php
			include '../partials/footer.php';
		?>
		 <script src="<?= ROOT_URL ?>/scripts/main.js"></script>
	</body>
</html>
