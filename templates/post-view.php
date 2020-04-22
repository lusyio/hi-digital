<?php
$id = $_GET['post_id'];

$post = DB('*', 'post', 'id=' . $id);

foreach ($post as $n) :
    $title = $n['title'];
    $body = $n['body'];
    $problem = $n['problem'];
    $icon = $n['icon'];
endforeach;
?>
<div class="post-body">
    <h1><?= $title; ?></h1>
    <p class="problem">Проблема: <?= $problem; ?></p>
    <?= $body; ?>
</div>
