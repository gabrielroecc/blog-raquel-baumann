<?php
require './config/database.php';

if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT picture FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query); // Establish the database connection
	$picture = mysqli_fetch_assoc($result); 
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Raquel Baumann - Blog</title>
        <link rel="stylesheet" href="<?= ROOT_URL ?>styles/style.css" />
        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    </head>
    <body>
    <nav>
            <div class="container nav_container">
                <a href="index.php" class="nav_logo">
                    <img src="<?= ROOT_URL . 'img/' . "logo.png" ?>" />
                </a>
                <ul class="nav_items">
                    <li>
                        <a href="<?= ROOT_URL ?>blog.php">Blog</a>
                    </li>
                    <?php if(isset($_SESSION['user-id'])) : ?>

                        <li class="nav_profile">
                        <div class="user_img">
                        <img src="<?= ROOT_URL . 'img/' . $picture['picture'] ?>" />
                        </div>
                        <ul>
                            <?php if(isset($_SESSION['user_is_admin'])) : ?>
                            <li>
                                <a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a>
                            </li>
                            <?php endif ?>
                            <li>
                                <a href="<?= ROOT_URL ?>logout.php">Sair</a>
                            </li>
                        </ul>
                    </li>

                    <?php else : ?>
                    <li>
                        <a href="<?= ROOT_URL ?>signin.php">Entrar</a>
                    </li>
                    <?php endif ?>


                    
                </ul>

                <button id="open_nav_btn"><i class="uil uil-bars"></i></button>
                <button id="close_nav_btn"><i class="uil uil-times"></i></button>
            </div>
        </nav>
    </body>
</html>
