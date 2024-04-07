<?php
session_start();
$message = $_SESSION['message'] ?? "";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="static/stylesForAuth.css">
</head>
<body>
<div class="container">
    <h1>Вход</h1>
    <form id="formID" action="obrabotka.php" method="post">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" id="submitBtn" value="Войти">
    </form>    
    <div id="error" style="color: red;"></div> <!-- Div для отображения ошибки -->
</div>
<script> 
    document.getElementById("submitBtn").addEventListener("click", function(event) { 
        event.preventDefault(); 

        var form = document.getElementById("formID");
        form.submit();
    }); 
</script>
<script>
    window.onload = function() {
        var urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('error')) {
            document.getElementById("error").innerText = "Неверный логин или пароль!";
        }
    };
</script>
</body>
</html>