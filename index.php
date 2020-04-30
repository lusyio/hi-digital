<?php
// ооздаем константу корня проекта для использования в путях файлов
define('__ROOT__', __DIR__);
// Подключаем настройки и функции базы данных
require_once __ROOT__ . '/conf.php';
require_once __ROOT__ . '/DB.php';

// Создаем экземпляр подключения к БД
$db = new DB($dbName, $dbHost, $dbUser, $DbPassword);

// Задаем стандартный title
$pageTitle = 'Привет, оцифровка!';

// Задаем стандартное OpenGraph-изображение
$imgOpenGraph = 'hidigital';

// проверяем маршрут
$route = trim($_SERVER['REQUEST_URI'], '/');
$routeParts = explode('/', $route);
if ($routeParts[0] == '') {
// если пустой то открываем главную
    $postId = false;
    $content = __ROOT__ . '/main.php';
} elseif ($routeParts[0] == 'secret') {
    // если secret то открываем админку
    if (isset($routeParts[1]) && $routeParts[1] == 'editor') {
        $content = __ROOT__ . '/secret/editor.php';
    } else {
        $content = __ROOT__ . '/secret/index.php';
    }
} else {
    // Иначе ищем по ЧПУ
    $postId = $db->firstValue("SELECT id FROM post WHERE friendly_url = :url", [':url' => $routeParts[0]]);
    if ($postId) {
        // Если нашли по ЧПУ, тто загружаем
        $pageTitle = $db->firstValue("SELECT title FROM post WHERE friendly_url = :url", [':url' => $routeParts[0]]);
        $content = __ROOT__ . '/post-view.php';
        $pathImgOpenGraph = __ROOT__ . '/images/opengraph/'.$route[0].'.jpg';
        if (file_exists($pathImgOpenGraph)) {
            $imgOpenGraph = $route[0];
        }
    }else {
        // иначе 404
        http_response_code(404);
        $content = __ROOT__ . '/404.php';
    }
}

include __ROOT__ . '/header.php';
include $content;
include __ROOT__ . '/footer.php';
