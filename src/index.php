<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);

    // save username in session
    $_SESSION['username'] = $username;

    // cookie expires in 1 hour
    setcookie('username', $username, time() + 3600);

    // set http header to redirecto to another page
    header('Location: page1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Введення імені</title>
</head>
<body>
    <h1>Введіть своє ім'я</h1>
    <form method="POST" action="">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Надіслати</button>
    </form>
</body>
</html>
