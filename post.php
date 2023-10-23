<?php
include 'partials/header.php';


if(isset($_GET['id'])){
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$query = "SELECT * FROM posts WHERE id=$id";
	$result = mysqli_query($connection, $query);
	$post = mysqli_fetch_assoc($result);
}else{
	header('location: ' . ROOT_URL . 'blog.php');
	die();
}
?>
		<section class="singlepost">
			<div class="container singlepost_container">
				<h2>
					<?= $post['title'] ?>
				</h2>
				<div class="singlepost_thumbnail">
					<img src="./img/<?= $post['thumbnail'] ?>" alt="" />
				</div>
				<p>
				<?= $post['body'] ?>
				</p>
			</div>
		</section>
		<!-- Posts -->
		<?php
include 'partials/footer.php'
?>
	</body>
</html>
