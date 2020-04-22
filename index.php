<?php include 'header.php'; ?>
    <div class="container">
        <?php if (empty($_GET['id'])): ?>
            <h1>Привет, оцифровка!</h1>
            <div class="post">
                <?php include 'post-list.php'; ?>
            </div>
        <?php else: ?>
            <?php include 'templates/post-view.php'; ?>
        <?php endif; ?>
    </div>

<?php include 'footer.php'; ?>