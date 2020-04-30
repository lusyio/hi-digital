<?php
include __ROOT__ . '/secret/login.php';
?>
    <div class="container">
        <a href="/secret/editor/" class="btn">Добавить новый пост</a>
        <hr>
        <p>Редактировать существующие:</p>
        <?php
        $posts = $db->allRows("SELECT * FROM post WHERE status = 'active' ORDER BY date DESC");

        foreach ($posts as $post) {
            echo '<a href="/secret/editor/?id='.$post["id"].'" style="color:white;display:block;margin-bottom:10px">'.$post["title"].'</a>';

        }
        ?>
    </div>
