<?php
session_start();
$users = [
    [
        'username' => 'fdsfds',
        'password' => 'vds3421',
        'name' => 'Boba',
        'surname' => 'Bobovish',
        'mail' => 'valve@gmail.com'
    ],
    [
        'username' => 'fd321s',
        'password' => 'v41221',
        'name' => 'Lil',
        'surname' => 'Yeger',
        'mail' => 'wolf4324@gmail.com'
    ],
    [
        'username' => 'temiann',
        'password' => '2003',
        'name' => 'Ilya',
        'surname' => 'Karunin',
        'mail' => 'temiann36@gmail.com'
    ],
];

$username = $_POST['username'];
$password = $_POST['password'];

$found = false;

foreach($users as $user) {
    if ($username === $user['username'] && $password === $user['password']){
        $found = true;
        session_start();
        $_SESSION['message'] = "Добро пожаловать в систему, {$username}!";
        $_SESSION['user'] = $user;
        header("Location: http://project.local/php-course/cabinet.php");
        exit;
    }
}

// Если пользователь не найден, перенаправляем обратно на страницу авторизации с ошибкой
header("Location: http://project.local/php-course/auth.php?error=1");
exit;
?>