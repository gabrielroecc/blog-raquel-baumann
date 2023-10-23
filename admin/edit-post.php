<?php
	include 'partials/header.php';



	if(isset($_GET['id'])){
		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$query = "SELECT * FROM posts WHERE id=$id";
		$result = mysqli_query($connection, $query);
		$post = mysqli_fetch_assoc($result);
	}else{
		header('location: ' . ROOT_URL . 'admin/');
		die();
	}
?>
		<section class="form_section add_post_form">
			<div class="container form_section_container">
				<h2>Editar Post</h2>
				<form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
					<input type="hidden" name="id" placeholder="Título" id="" value="<?= $post['id'] ?>"/>
					<input type="hidden" name="previous_thumbnail_name" placeholder="Título" id="" value="<?= $post['thumbnail'] ?>"/>
					<input type="text" name="title" placeholder="Título" id="" value="<?= $post['title'] ?>"/>
					<textarea name="body" placeholder="Texto" id="" ><?= $post['body'] ?></textarea>
					<div class="form_control">
						<input type="checkbox" id="is_featured" value="1" checked name="is_featured"/>
						<label for="is_featured">Destaque</label>
					</div>
					<div class="form_control">
						<label for="thumbnail">Editar Imagem</label>
						<input type="file" name="thumbnail" id="thumbnail" />
					</div>

					<button class="btn" name="submit" type="submit">Editar Post</button>
				</form>
			</div>
		</section>
		<?php
			include '../partials/footer.php';
		?>
	</body>
</html>
