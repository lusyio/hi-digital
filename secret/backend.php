<?php
$id = '';
$title = '';
$problem = '';
$body = '';
$icon = '';
$date = '';
$friendlyUrl = '';

if (!empty($_POST['title'])) {
    if (empty($_POST['id'])) {
        // новый пост
        $status = 'active';
        $queryArgs = [
            ':title' => $_POST['title'],
            ':status' => $status,
            ':body' => $_POST['body'],
            ':problem' => $_POST['problem'],
            ':icon' => $_POST['icon'],
            ':date' => $_POST['date'],
            ':friendlyUrl' => $_POST['friendlyUrl'],
        ];
        $db->query("INSERT INTO post (title, status, body, problem, icon, date, friendly_url) VALUES (:title, :status, :body, :problem, :icon, :date, :friendlyUrl)", $queryArgs);
        echo '<div class="infoblock"><p>Запись создана</p></div>';
    } else {
        // обновление старого
        $queryArgs = [
            ':id' => $_POST['id'],
            ':title' => $_POST['title'],
            ':body' => $_POST['body'],
            ':problem' => $_POST['problem'],
            ':icon' => $_POST['icon'],
            ':date' => $_POST['date'],
            ':friendlyUrl' => $_POST['friendlyUrl'],
        ];
        $db->query("UPDATE post SET title = :title, body = :body, problem = :problem, icon = :icon, date = :date , friendly_url = :friendlyUrl WHERE id = :id", $queryArgs);
        echo '<div class="infoblock"><p>Запись обновлена</p></div>';
    }
}

if (!empty($_POST['del_id'])) {
    $db->query("DELETE FROM post WHERE id = :id", [':id' => intval($_POST['del_id'])]);
    echo '<div class="infoblock"><p>Запись удалена</p></div>';
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $postInfo = $db->firstRow("SELECT * FROM post WHERE  id = :id", [':id' => $id]);
    $title = $postInfo['title'];
    $problem = $postInfo['problem'];
    $body = $postInfo['body'];
    $icon = $postInfo['icon'];
    $date = $postInfo['date'];
    $friendlyUrl = $postInfo['friendly_url'];
}