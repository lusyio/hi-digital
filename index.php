<?php include 'header.php'; ?>

    <div class="after-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                    <h1 class="after-header__title">
                        <small>Привет</small>
                        Оцифровка
                    </h1>
                    <p class="after-header__text">Онлайн журнал</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                    <img class="after-header__img" src="/images/img-after-header.png" alt="privet-ocifrovka">
                </div>
            </div>
        </div>
        <div class="ellipse-left after-header__svg rellax"></div>
        <div class="ellipse-right after-header__svg rellax"></div>
        <img class="lines-left after-header__svg rellax-slow" src="/svg/svg-lines-left.svg" alt="">
        <img class="lines-right after-header__svg rellax-slow" src="/svg/svg-lines-right.svg" alt="">
    </div>

    <div class="main-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                    <h2 class="main-black__header">Каждый вторник будешь получать решение своей оффлайн проблемы</h2>
                    <div class="main-black-container">
                        <p class="main-black__p">
                            Повседневная практика показывает, что начало повседневной работы по формированию позиции
                            требуют
                            определения и уточнения системы обучения кадров, соответствует насущным потребностям.
                            Разнообразный
                            и
                            богатый опыт реализация намеченных плановых
                        </p>
                        <h3 class="main-black__h3">О проекте - почему стоит читать и что за челы</h3>
                        <p class="main-black__p">
                            Этот проект помагает предпринимателям разобраться в том, каким образом можно
                            автоматизировать и
                            оцифровать бизнес-процессы. Здесь мы рассказываем о распространенных проблемах, с которыми
                            сталкивается
                            бизнес каждый день, и способах их решения с помощью технологий.
                        </p>
                        <p class="main-black__p">
                            Все это мы сопровождаем кейсами из наших проектов. Либо рассказываем, как можно реализовать
                            (%%%)
                            быстро
                            и бюджетно. Мы не претендуем на звание экспертов номер один. Просто делимся своим опытом и
                            идеями.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php if (!empty($_GET['post_id'])): ?>
                        <p class="main-black__posts">Привет, оцифровка!</p>
                        <?php include 'templates/post-view.php'; ?>
                    <?php else: ?>
                        <p class="main-black__posts">Все выпуски</p>
                        <div class="post-list">
                            <?php include 'post-list.php'; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>