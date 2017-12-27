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
LtAppAsset::register($this);
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300;subset=cyrillic' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="<?= \yii\helpers\Url::to('/') ?>">Кремлевский</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?= $this->params['active'] == 'dictionary' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/dictionary') ?>" class="page-scroll">Cловарь Часовщика</a></li>
                <li <?= $this->params['active'] == 'price' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/price') ?>" class="page-scroll">Стоимость Ремонта</a></li>
                <li <?= $this->params['active'] == 'services' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/services') ?>" class="page-scroll">Услуги Сервиса</a></li>
                <li <?= $this->params['active'] == 'contact' ? 'class="active"' : '' ?>><a href="<?= \yii\helpers\Url::to('/contact') ?>" class="page-scroll">Оставить заявку</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="text-center" name="home">
    <div class="intro-text">
        <h1><span class="color">Кремлевский</span> часовой сервис</h1>
        <p>часовая мастерская никольская 17/1</p>
        <a href="<?= \yii\helpers\Url::to('/contact') ?>" class="btn btn-default btn-lg page-scroll">Оставить заявку</a> </div>
        <div class="clearfix"></div>
        <!-- <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> </div> -->
</header>
        <div class="container">
            <?= Alert::widget() ?>
        </div>
        <?= $content ?>

<div id="social-section">
    <div class="container">
        <div class="social">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <p>Copyright &copy; 2017 | kremlinwatchservice.ru</p>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
