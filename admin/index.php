<?php
	include 'partials/header.php';

		
	$current_user_id = $_SESSION['user-id'];
	$query = "SELECT id, title, body FROM posts ORDER BY id DESC";
	$posts = mysqli_query($connection, $query);
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
							<a class="active" href="index.php"
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
								<h5>Gerenciar Usuários</h5>
							</a>
						</li>
					</ul>
				</aside>
				<main>
					<h2>Gerenciar Posts</h2>
					<?php if(mysqli_num_rows($posts) > 0) : ?>
					<table>
						<thead>
							<tr>
								<th>Título</th>
								<th>Editar</th>
								<th>Deletar</th>
							</tr>
						</thead>
						<tbody>
						
							<?php while ($post = mysqli_fetch_assoc($posts)) : ?>
								<tr>
									<td><?= $post['title'] ?></td>
									<td>
										<a href="<?= ROOT_URL ?>admin/edit-post.php?id=<?= $post['id'] ?>" class="btn sm">Editar</a>
									</td>
									<td>
										<a href="<?= ROOT_URL ?>admin/delete-post.php?id=<?= $post['id'] ?>" class="btn sm danger">Deletar</a>
									</td>
								</tr>
								<?php endwhile ?>
				
				<?php endif ?>
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
