<?php
include __ROOT__ . '/secret/login.php';
include __ROOT__ . '/secret/backend.php';
?>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<div class="container">
    <a href="/secret/"><- Обратно в админку</a>
    <hr>
    <form method="post">
        <input type="text" name="id" value="<?= $id; ?>" style="display: none" hidden>
        <input type="text" name="title" value="<?= $title; ?>" placeholder="Название поста" required>
        <input type="text" name="problem" value="<?= $problem; ?>" placeholder="Проблема" required>
        <input type="text" name="icon" value="<?= $icon; ?>" placeholder="Иконка" required>
        <input type="date" name="date" value="<?= $date; ?>" placeholder="Дата" required>
        <input type="text" name="friendlyUrl" value="<?= $friendlyUrl; ?>" placeholder="ЧПУ">
        <textarea name="body"></textarea>
        <script>
            CKEDITOR.replace('body');
            CKEDITOR.instances.body.setData('<?=preg_replace("(\r\n|\n|\r)", "", $body); ?>');
            CKEDITOR.config.width = '100%';
        </script>
        <button type="submit" formaction="/" name="save" class="btn">Сохранить</button>
        <button type="submit" formaction="/secret/preview" name="preview" class="btn" formtarget="_blank">Предварительный просмотр</button>
    </form>
    <form method="post" action="">
        <input type="text" name="del_id" value="<?= $id; ?>" style="display: none" hidden>
        <button type="submit" name="del" class="btn btn-del">Удалить</button>
    </form>
</div>
