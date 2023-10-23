<?php
include 'partials/header.php';



$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);


$query = "SELECT * FROM posts ORDER by id DESC LIMIT 9";
$posts = mysqli_query($connection, $query);
?>


<?php if(mysqli_num_rows($featured_result) == 1) : ?>
		<section class="featured">
			<div class="container featured_container">
				<div class="post_thumbnail">
					<img src="./img/<?= $featured['thumbnail'] ?>" alt="" />
				</div>

				<div class="post_info">
					<h2 class="post_title">
						<a href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>"
							><?= $featured['title'] ?></a
						>
						<p class="post_body">
						<?= substr($featured['body'], 0, 300) ?>...
						</p>
					</h2>
					<a class="read_more" href="<?= ROOT_URL ?>post.php?id=<?= $featured['id'] ?>">Ler mais</a>
				</div>
			</div>
		</section>
<?php endif ?>
		<!-- End of featured post -->

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