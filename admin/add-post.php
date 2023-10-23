<?php
include 'partials/header.php';

$title = $_SESSION['add-post-data']['title'] ?? null;
$body = $_SESSION['add-post-data']['body'] ?? null;

unset($_SESSION['add-post-data']);

$errors = $_SESSION['add-post-errors'] ?? array(); // Recupera os erros

?>
<section class="form_section add_post_form">
    <div class="container form_section_container">
        <h2>Adicionar um post</h2>
        <?php foreach ($errors as $error) : ?>
            <div class="alert_message error">
                <p><?= $error ?></p>
            </div>
        <?php endforeach; ?>
        <form action="<?= ROOT_URL ?>admin/add-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="title" placeholder="Título" id="" value="<?= $title ?>"/>
            <textarea name="body" rows="10" placeholder="Texto" id=""><?= $body ?></textarea>
            <div class="form_control">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" checked/>
                <label for="is_featured">Destaque</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Adicionar Imagem</label>
                <input type="file" name="thumbnail" id="thumbnail" accept="image/*" />
            </div>

            <button class="btn" name="submit" type="submit">Criar Post</button>
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
</body>
</html>
