<?php
$posts = $db->allRows("SELECT * FROM post WHERE friendly_url IS NOT NULL AND friendly_url != '' ORDER BY date DESC");

foreach ($posts as $post) {
    $url = $post['friendly_url'];
    $title = $post['title'];
    $problem = $post['problem'];
    $icon = $post['icon'];

    include __ROOT__ . '/templates/post-item.php';
}
