<div class="post-view">
    <div class="container-fluid">
        <h1 class="post-view__title"><?= $postData['title'] ?></h1>
        <?= $postData['body'] ?>
    </div>
</div>
<div class="main-black">
    <div class="container">
        <p class="main-black__posts">Все выпуски</p>
        <div class="post-list">
            <?php include __ROOT__ . '/post-list.php'; ?>
        </div>
    </div>
</div>
