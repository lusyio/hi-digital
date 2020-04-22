<?php
$id = '';
$title = '';
$problem = '';
$body = '';
$icon = '';
$date = '';

if (!empty($_GET['id'])) :

    $id = $_GET['id'];

    $postinfo = DB('*', 'post', 'id=' . $id);

    foreach ($postinfo as $p) :
        $title = $p['title'];
        $problem = $p['problem'];
        $body = $p['body'];
        $icon = $p['icon'];
        $date = $p['date'];
    endforeach;

endif;

if (!empty($_POST['title'])) :

    if (empty($_POST['id'])) :
        // новый пост
        $status = 'active';
        $sql = "INSERT INTO post (title, status, body, problem, icon, date) VALUES (?,?,?,?,?,?)";
        $pdo->prepare($sql)->execute([$_POST['title'], $status, $_POST['body'], $_POST['problem'], $_POST['icon'], $_POST['date']]);

        echo '<div class="infoblock"><p>Запись создана</p></div>';
    else:
        // обновление старого
        $sql = "UPDATE post SET title=?, body=?, problem=?, icon=?, date=? WHERE id=?";
        $pdo->prepare($sql)->execute([$_POST['title'], $_POST['body'], $_POST['problem'], $_POST['icon'], $_POST['date'], $_POST['id']]);

        echo '<div class="infoblock"><p>Запись обновлена</p></div>';
    endif;

endif;

if (!empty($_POST['del'])) :

    $sql = "DELETE FROM post WHERE id =  :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
    $stmt->execute();

    echo '<div class="infoblock"><p>Запись удалена</p></div>';
endif;