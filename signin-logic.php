<?php
require 'config/database.php';
session_start();

if (isset($_POST['submit'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = "Nome de usuário ou e-mail necessários";
    } elseif (!$password) {
        $_SESSION['signin'] = "A senha é necessária";
    } else {
        $fetch_user_query = "SELECT * FROM users WHERE username=? OR email=?";
        $fetch_user_stmt = mysqli_prepare($connection, $fetch_user_query);
        
        if ($fetch_user_stmt) {
            mysqli_stmt_bind_param($fetch_user_stmt, "ss", $username_email, $username_email);
            mysqli_stmt_execute($fetch_user_stmt);
            $fetch_user_result = mysqli_stmt_get_result($fetch_user_stmt);

            if (mysqli_num_rows($fetch_user_result) == 1) {
                $user_record = mysqli_fetch_assoc($fetch_user_result);
                $db_password = $user_record['password'];

                if (password_verify($password, $db_password)) {
                    $_SESSION['user-id'] = $user_record['id'];
                    
                    if ($user_record['is_admin'] == 1) {
                        $_SESSION['user_is_admin'] = true;
                        header('Location: ' . ROOT_URL . 'admin/');
                    } else {
                        header('Location: ' . ROOT_URL . 'blog-home.php'); // Redirect non-admin users to index.php
                    }
                    exit();
                } else {
                    $_SESSION['signin'] = "Usuário ou Senha inválidos.";
                }
            } else {
                $_SESSION['signin'] = "Usuário não encontrado";
            }

            mysqli_stmt_close($fetch_user_stmt);
        }
    }

    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('Location: ' . ROOT_URL . 'signin.php');
        exit();
    }
} else {
    header('Location: ' . ROOT_URL . 'signin.php');
    exit();
}
