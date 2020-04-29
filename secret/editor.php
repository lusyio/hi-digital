<?php
include 'login.php';
include '../header.php';
?>
<?php include 'backend.php'; ?>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<div class="container">
<a href="/secret/"><- Обратно в админку</a>
    <hr>



        <form method="post" action="editor.php">
            <input type="text" name="id" value="<?=$id;?>" style="display: none" hidden>
            <input type="text" name="title" value="<?=$title;?>" placeholder="Название поста" required>
            <input type="text" name="problem" value="<?=$problem;?>" placeholder="Проблема" required>
            <input type="text" name="icon" value="<?=$icon;?>" placeholder="Иконка" required>
            <input type="date" name="date" value="<?=$date;?>" placeholder="Дата" required>
            <textarea name="body"></textarea>
            <script>
                CKEDITOR.replace( 'body' );
                CKEDITOR.instances.body.setData( '<?=preg_replace("(\r\n|\n|\r)", "", $body); ?>' );
                CKEDITOR.config.width = '100%';
            </script>
            <button type="submit" name="save" class="btn">Сохранить</button>
        </form>
         <form method="post" action="editor.php">
             <input type="text" name="del_id" value="<?=$id;?>" style="display: none" hidden>
            <button type="submit" name="del" class="btn btn-del">Удалить</button>
        </form>



</div>
<?php include '../footer.php'; ?>
