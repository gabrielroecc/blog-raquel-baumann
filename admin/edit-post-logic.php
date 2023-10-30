<?php
require 'config/database.php';
if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $thumbnail = $_FILES['thumbnail'];

    $is_featured = $is_featured == 1 ?: 0;

    if(!$title){
        $_SESSION['edit-post'] = "Alguns dados estão inválidos, corrija-os!";
    }elseif(!$body){
        $_SESSION['edit-post'] = "Alguns dados estão inválidos, corrija-os!";
    }else{
        if($thumbnail['name']){
            $previuos_thumbnail_path = '../img/' . $previous_thumbnail_name;
            if($previuos_thumbnail_path){
                unlink($previuos_thumbnail_path);
            }

            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../img/' . $thumbnail_name;

            $allowed_files = ['png', 'jpg', 'jpeg', 'webp'];
            $extension = explode('.' , $thumbnail_name);
            $extension = end($extension);
            if (in_array($extension, $allowed_files)) {
                if($thumbnail['size'] < 10000000){
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                }else{
                    $_SESSION['edit-post'] = "O tamanho da imagem é muito grande!";
                }
            }else{
                $_SESSION['edit-post'] = "A extensão do arquivo não é permitida.";
            }
        }
    }
    if($_SESSION['edit-post']){
        header('location: ' . ROOT_URL . 'admin/');
        die();
    }else{
        if ($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured=0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', is_featured=$is_featured WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);
    }

    if(!mysqli_errno($connection)){
        $_SESSION['edit-post-success'] = "Post editado com sucesso!";
    }
}
header('location: ' . ROOT_URL . 'admin/');
die();