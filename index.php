<?php include 'header.php'; ?>
    <div class="container">
        <?php if (!empty($_GET['post_id'])): ?>
            <?php include 'templates/post-view.php'; ?>
        <?php else: ?>
            <h1>Привет, оцифровка!</h1>
            <div class="post">
                <?php include 'post-list.php'; ?>
            </div>
        <?php endif; ?>
    </div>

<?php include 'footer.php'; ?>