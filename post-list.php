<?php

$post = DB('*', 'post', 'status="active" order by date DESC');

foreach ($post as $n) :
    $id = $n['id'];
    $title = $n['title'];
    $problem = $n['problem'];
    $icon = $n['icon'];

    include 'templates/post-item.php';

endforeach;
