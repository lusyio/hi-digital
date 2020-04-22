<?php include '../header.php'; ?>
    <div class="container">
        <a href="editor.php" class="btn">Добавить новый пост</a>
        <hr>
        <p>Редактировать существующие:</p>
        <?php
        $post = DB('*', 'post', 'status="active" order by date DESC');
        foreach ($post as $n) :
            echo '<a href="editor.php?id='.$n["id"].'" style="color:white;display:block;margin-bottom:10px">'.$n["title"].'</a>';
        endforeach;
        ?>
    </div>

<?php include '../footer.php'; ?>