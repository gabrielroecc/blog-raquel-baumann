<?php
require './config/constants.php';

$completename = $_SESSION['signup-data']['completename'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$tel = $_SESSION['signup-data']['tel'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

unset($_SESSION['signup-data']);
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Raquel Baumann - Blog</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>styles/style.css" />
    <link
        rel="stylesheet"
        href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
</head>

<body>
    <section class="form_section">
        <div class="container form_section_container">
            <h2>Cadastrar</h2>
            <?php if (isset($_SESSION['signup'])): ?>
                <div class="alert_message error">
                    <p>
                        <?= $_SESSION['signup'];
                        unset($_SESSION['signup']);
                        ?>
                    </p>
                </div>
            <?php endif; ?>
            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="completename" value="<?= $completename ?>" placeholder="Nome completo" id="" />
                <input type="text" name="username" value="<?= $username ?>" placeholder="Nome de usuário" id="" />
                <input type="text" name="tel" value="<?= $tel ?>" placeholder="Telefone / Whatsapp" id="" />
                <input type="email" name="email" value="<?= $email ?>" placeholder="Email" id="" />
                <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Criar senha" id="" />
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirmar senha" id="" />
                <div class="form_control">
                    <label for="picture"></label>
                    <input type="file" name="picture" id="picture" />
                </div>
                <button class="btn" name="submit" type="submit">Cadastrar</button>
                <small>Já tem uma conta? <a href="signin.php">Fazer login</a></small>
            </form>
        </div>
    </section>
</body>