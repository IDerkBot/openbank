<?
    include_once($_SERVER['DOCUMENT_ROOT'] . "/lib/db_connect.php");
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $count = $conn->query("SELECT COUNT(*) FROM user WHERE `login` = '$login' AND `password` = '$pass'")->fetch_assoc()['COUNT(*)'];
    if($count == 1){
        setcookie('login', $login, time() + 3600*24*7, "/");
        header("Location: /");
    }
    else{
        echo 'Такого пользователя не найдено! <a href="/auth/index.php">Вернуться</a>';
    }
?>