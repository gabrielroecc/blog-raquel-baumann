<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $completename = filter_var($_POST['completename'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $tel = filter_var($_POST['tel'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $picture = $_FILES['picture'];
    
    // Validate input values
    if (!$completename){
        $_SESSION['signup'] = 'Por favor coloque o seu nome completo';
    } elseif (!$username){
        $_SESSION['signup'] = 'Por favor coloque o seu nome de usuário';
    } elseif (!$tel){
        $_SESSION['signup'] = 'Por favor coloque o seu telefone';
    } elseif (!$email){
        $_SESSION['signup'] = 'Por favor coloque um email válido';
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
        $_SESSION['signup'] = "A senha tem que possuir mais que 8 caracteres";
    } elseif (!$picture['name']){
        $_SESSION['signup'] = "Por favor, selecione uma imagem";
    } else {
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = "As senhas devem ser iguais";
        } else {
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            $username_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $username_check_query);
            if(mysqli_num_rows($user_check_result) > 0 ){
                $_SESSION['signup'] = "Usuário ou email já estão cadastrados";
            } else {
                $time = time();
                $picture_name = $time . $picture['name'];
                $picture_tmp_name = $picture['tmp_name'];
                $picture_destination_path = 'img/' . $picture_name;
    
                $allowed_files = ['png', 'jpg', 'jpeg', 'webp'];
                $extention = explode('.', $picture_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    if($picture['size'] < 1000000){
                        move_uploaded_file($picture_tmp_name, $picture_destination_path);
                    }else{
                        $_SESSION['signup'] = "O tamanho da imagem é muito grande! Imagem precisa ter menos que 1mb";
                    }
                }else{
                    $_SESSION['signup'] = "Tipo de arquivo não suportado";
                }
            }
        }
    }
    if(isset($_SESSION['signup'])){
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    } else {
        $insert_user_query = "INSERT INTO users (completename, username, tel, email, password, picture, is_admin) 
                             VALUES ('$completename', '$username', '$tel', '$email', '$hashed_password', '$picture_name', 0)";
                             $insert_user_result = mysqli_query($connection, $insert_user_query);

            if(!mysqli_errno($connection)){
                $_SESSION['signup-success'] = "Conta criada com sucesso!";
                header('location: ' . ROOT_URL . 'signin.php');
                die();
            }

    }
} else {
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}
