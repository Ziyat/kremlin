<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\HeadAppAsset;
use app\assets\LtAppAsset;

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
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
<!--<div id="preloader"></div>-->
<section id="header" class="header">
    <div class="top-bar">
        <div class="container">
            <div class="navigation" id="navigation-scroll">
                <div class="row">
                    <div class="col-md-11 col-xs-10">
                        <a href="/"><span id="logo"><strong
                                        class="strong">Сервисный Центр</strong> <br>«МИР ЮВЕЛИРА»</span></a>
                    </div>
                    <div class="col-md-1 col-xs-2">
                        <p class="nav-button">
                            <button id="trigger-overlay" type="button">
                                <i class="fa fa-bars"></i>
                            </button>
                        </p>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.navigation -->
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <div class="container">
        <div class="starting">
            <div class="row">
                <div class="col-sm-5">
                    <img src="img/ilmondo.png" alt="DiDiamond" class="wow fadeInDown animated animated">
                </div>
                <div class="col-sm-7">
                    <div class="banner-text animation-box wow fadeInUp animated">
                        <h2>
                            <strong class="strong">C радостью </strong>предоставляет
                        </h2>

                        <p>возможность для всех ценителей прекрасного воспользоватся услугами наших мастеров по
                            изготовлению эксклюзивных ювелирных изделий по авторским эскизам.</p>
                        <p>Украшения, изготавливаемые
                            в нашей мастерской, особым образом отражают художественное и эстетическое восприятие
                            ювелирной моды и отличаются высоким исполнением, вкусом и неповторимостью каждого
                            изделия.</p>
                        <p>Еще одной отличительной особенностью нашей компании является гибкость, чуткое отношение к
                            пожеланиям своих клиентов и возможность пользоваться всеми видами услуг, входящих в область
                            ювелирного дела, включая новейшие технологии XXI века...</p>
                        <p>
                            Наша ювелирная компания обслуживает центр Москвы c 2001 года и считается самой крупной и
                            профессиональной компанией в Москве.
                        </p>

                    </div> <!-- /.banner-text -->
                </div>
            </div>
        </div>
        <!-- /.starting -->
    </div>
    <!-- /.container -->
</section>
<!-- /#header -->

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic id neque omnis praesentium, quibusdam repellat
tenetur. Alias aperiam aut expedita magni obcaecati, odit optio quas? Ab ex iusto molestias?

<?= $content ?>
<!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

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
