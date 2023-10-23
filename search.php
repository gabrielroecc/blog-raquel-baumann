<?php
require 'partials/header.php';

if(isset($_GET['search']) && isset($_GET['submit'])){
    $search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = "SELECT * FROM posts WHERE title LIKE '%$search%' ORDER BY id DESC";
    $posts = mysqli_query($connection, $query);
}else{
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

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
    <?php include 'partials/footer.php' ?>