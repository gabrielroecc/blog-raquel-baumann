<?php
include 'partials/header.php';


$query = "SELECT * FROM posts ORDER by id DESC";
$posts = mysqli_query($connection, $query);
?>

		<!-- Search -->
		<section class="search_bar">
			<form action="<?= ROOT_URL ?>search.php" class="container search_container" method="GET">
				<div>
					<i class="fa-solid fa-magnifying-glass"></i>
					<input type="search" name="search" placeholder="Pesquisar" />
				</div>
				<button type="submit" name="submit" class="btn">Buscar</button>
			</form>
		</section>
		<!-- Search -->
		<!-- Posts -->
		<div class="posts">
			<div class="container posts_container">
				<?php while($post = mysqli_fetch_assoc($posts)) : ?>
						<article class="post">
							<div class="post_thumbnail">
								<img src="./img/<?= $post['thumbnail'] ?>" alt="" />
							</div>
							<div class="post_info">
								<h3 class="post_title">
									<a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a
									>
								</h3>
								<p class="post_body">
								<?= substr($post['body'], 0, 300) ?>...
								</p>
								<a class="read_more_post" href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">Ler mais</a>
							</div>
						</article>
				<?php endwhile ?>
			</div>
		</div>
		<!-- Posts -->
		<?php
include 'partials/footer.php'
?>
	</body>
</html>
