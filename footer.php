<div class="preFooter">
    <div class="container">
        <h2 class="preFooter__header">Не пропусти публикацию новых выпусков</h2>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                <p class="preFooter__text">Подпишись на еженедельную рассылку и получай новые выпуски на почту. Кстати,
                    там выходят эксклюзивные
                    материалы, которые не попадают сюда 😏</p>
            </div>
            <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                <div class="input-group preFooter-input-group">
                    <input class="form-control" id="sendEmail" type="text" placeholder="name@email.com">
                    <div class="input-append">
                        <button>Подписаться</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="points rellax-slow-footer" src="/svg/svg-footer-points.svg" alt="">
    <img class="preFooter__svg lines-left rellax-slow-footer" src="/svg/svg-footer-lines.svg" alt="">
    <div class="preFooter__svg ellipse-left rellax-footer"></div>
    <div class="preFooter__svg ellipse-right rellax-footer"></div>
</div>
</body>
<script type="text/javascript" src="assets/js/rellax.min.js"></script>
<script>
    if (document.documentElement.clientWidth >= 768) {
        const rellax = new Rellax('.rellax', {
            speed: -2,
            center: false,
            wrapper: null,
            round: true,
            vertical: true,
            horizontal: false
        });

        const rellaxSlow = new Rellax('.rellax-slow', {
            speed: -1.5,
            center: false,
            wrapper: null,
            round: true,
            vertical: true,
            horizontal: false
        });

        const rellaxFooter = new Rellax('.rellax-footer', {
            speed: -2,
            center: true,
            wrapper: null,
            round: true,
            vertical: true,
            horizontal: false
        });

        const rellaxSlowFooter = new Rellax('.rellax-slow-footer', {
            speed: -1.5,
            center: true,
            wrapper: null,
            round: true,
            vertical: true,
            horizontal: false
        });
    }
</script>
<footer>
    <div class="container">
        <div class="footer-menu">
            <a href="#"><img src="/svg/svg-footer-richbee.svg" alt="richbee"></a>
            <a href="mailto:hello-digital@richbee.ru">hello-digital@richbee.ru</a>
            <a href="#">Политика конфиденциальности</a>
        </div>
    </div>
</footer>
</html>