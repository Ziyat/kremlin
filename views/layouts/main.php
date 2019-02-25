<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\assets\HeadAppAsset;
use app\assets\LtAppAsset;
use yii\helpers\Html;

AppAsset::register($this);
HeadAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N4NHZCG');</script>
    <!-- End Google Tag Manager -->

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4NHZCG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
<!--<div id="preloader"></div>-->
<section id="header" class="header">
    <nav class="navbar navbar-default">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">«МИР ЮВЕЛИРА»</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#features">Услуги</a></li>
                    <li><a href="#speciality">Нам доверяют</a></li>
                    <li><a href="#gallery">Галерея</a></li>
                    <li><a href="#team">Преимущества</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="nav">
        <div class="navbar"></div>
    </div>
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-4 intro-text-left align-items-center d-flex">
                <h2>Ювелирный сервисный <br>центр</h2>
            </div>
            <div class="col-md-4 intro-text-center">
                <img id="gerb" src="/img/gerb-wt.png" alt="">
                <p>«МИР ЮВЕЛИРА»</p>
                    <a class="phones" href="tel:+74993440004">+7 499 344 0004</a>
                &nbsp;
                    <a class="phones" href="tel:+79096234000">+7 909 623 4000</a>
                <p>Никольская, ул. 17/2</p>
            </div>
            <div class="col-md-4 intro-text-right align-items-center d-flex">
                <h2>Авторизированный сервисный <br>центр </h2>
            </div>
            </div>
    </div>
</section>

<?= $content ?>

<section id="footer" class="wrapper">
    <div class="container text-center">
        <div class="footer-logo">
            <h3 class="text-center animation-box wow bounceIn animated">«МИР ЮВЕЛИРА»</h3>
        </div>
        <ul class="social-icons text-center">
            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="wow animated fadeInRight twitter"><a href="#"><i class="fa fa-twitter"></i></a>
            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

        <div class="copyright">
            <div>© 2018 Все права защищены</div>
        </div>
    </div><!-- container -->
</section>


<!-- HHHHHHHHHHHHHHHHHH        Open/Close          HHHHHHHHHHHHHHHH -->
<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close">Close</button>
    <nav>
        <ul>
            <li class="hideit"><a href="#header">Главная</a></li>
            <li class="hideit"><a href="#features">Услуги</a></li>
            <li class="hideit"><a href="#speciality">Нам доверяют</a></li>
            <li class="hideit"><a href="#gallery">Галерея</a></li>
            <li class="hideit"><a href="#team">Преимущества</a></li>
            <li class="hideit"><a href="#contact">Контакты</a></li>
        </ul>
    </nav>
</div>
<?php $this->endBody() ?>
<script>
    new WOW().init();
</script>
<script>
    $(document).ready(function () {
        $(".hideit").click(function () {
            $(".overlay").hide();
        });
        $("#trigger-overlay").click(function () {
            $(".overlay").show();
        });
    });
</script>
<script>
    $(document).ready(function () {

        var kawa = $('.top-bar');
        var back = $('#back-to-top');

        function scroll() {
            if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

            } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
            }
        }

        document.onscroll = scroll;
    });
</script>
<script>
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
</body>
</html>
<?php $this->endPage() ?>


<?php
$script = <<<JS
$('.phones').on('click', function(){
    ym(50956298, 'reachGoal', 'telClick');
    gtag('event', 'telClick');
});
$('#submit').on('click', function(){
   ym(50956298, 'reachGoal', 'form');
   gtag('event', 'form');
});
JS;
$this->registerJs($script);
