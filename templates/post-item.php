<a class="post-item-link" href="/<?= $url; ?>">
    <div class="post-item">
        <p class="post-item__problem">Проблема: <span><?= $problem; ?></span></p>
        <h2 class="post-item__title"><?= $title; ?></h2>
        <img alt="<?= $problem; ?>" class="post-item__img" src="<?= $icon; ?>"/>
        <button class="post-item__btn">Читать</button>
        <div class="for-disabled"></div>
        <p class="for-disabled-text"><img src="/svg/svg-lock.svg" alt="">Станет доступно после 16 мая</p>
    </div>
</a>