<?php
session_start();

if (isset($_GET['logout'])) {
    global $urlSite;
    unset($_SESSION['auth']);
    session_destroy();
    header("Refresh:0");
    header('Location: ' . $urlSite . '/');
}

if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        if ($login == $adminUser && $password == $adminPass) {
            $_SESSION['auth'] = 1;
            header("Refresh:0");
        } else {
            sleep(rand(3, 5));
        }
    }
    ?>
    <div style="text-align: center">
        <form method="post">
            <label>Логин
                <input type="text" name="login">
            </label>
            <label>Пароль
                <input type="password" name="password">
            </label>
            <button type="submit">Войти</button>
        </form>
    </div>
    <?php exit();
}
?>
    <div style="position: absolute; right: 0;">
        <a href="/secret?logout">Выйти</a>
    </div>
