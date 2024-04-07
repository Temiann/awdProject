<?php
    session_start();
    $message = $_SESSION['message'] ?? "";
    $user = $_SESSION['user'] ?? null;

if (!$user) {
    header("Location: auth.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="static/stylesForAuth.css">
</head>
<body>
    <div class="container">
        <h1><?=$message?></h1>
        <div class="profile-info">
            <p><strong>Имя:</strong> <?=$user['name']?></p>
            <p><strong>Surname:</strong> <?=$user['surname']?></p>
            <p><strong>Email:</strong> <?=$user['mail']?></p>
        </div>
    </div>
</body>
</html>