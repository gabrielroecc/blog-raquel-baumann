<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    $is_featured = ($is_featured == 1) ? 1 : 0;

    $errors = array(); // Array para rastrear erros

    if (empty($title)) {
        $errors[] = "O post precisa de um título";
    }
    if (empty($body)) {
        $errors[] = "O post precisa de um texto";
    }
    if (empty($thumbnail['name'])) {
        $errors[] = "A imagem do post é obrigatória";
    }

    if (empty($errors)) {
        $time = time();
        $thumbnail_name = $time . $thumbnail['name'];
        $thumbnail_tmp_name = $thumbnail['tmp_name'];
        $thumbnail_destination_path = '../img/' . $thumbnail_name;

        $allowed_files = ['png', 'jpg', 'jpeg', 'webp'];
        $extention = pathinfo($thumbnail_name, PATHINFO_EXTENSION);
        if (in_array($extention, $allowed_files)) {
            if ($thumbnail['size'] < 10_000_000) {
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            } else {
                $errors[] = "O tamanho da imagem é muito grande! A imagem precisa ter menos que 2 MB";
            }
        } else {
            $errors[] = "Tipo de arquivo não suportado";
        }
    }

    if (!empty($errors)) {
        $_SESSION['add-post-errors'] = $errors; // Armazena os erros em um array
        $_SESSION['add-post-data'] = $_POST;
        header('location: ' . ROOT_URL . 'admin/add-post.php');
        die();
    } else {
        if ($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        $insert_user_query = "INSERT INTO posts (title, body, thumbnail, is_featured) 
                             VALUES ('$title', '$body', '$thumbnail_name', '$is_featured')";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if ($insert_user_result) {
            $_SESSION['add-post-success'] = "Post criado com sucesso!";
            header('location: ' . ROOT_URL . 'admin/index.php');
            die();
        } else {
            $_SESSION['add-post-errors'] = array("Erro ao criar o post: " . mysqli_error($connection));
            header('location: ' . ROOT_URL . 'admin/add-post.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/add-post.php');
    die();
}
