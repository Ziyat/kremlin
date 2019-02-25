<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

$this->title = 'Сервисный Центр «МИР ЮВЕЛИРА»';
$metaTags = [
    [
        'name' => 'keywords',
        'content' => 'ремонт ювелирных изделий в москве, диагностика ювелирных изделий в москве, Sublime by Bosco, Pomellato, H.Stern, Tous, Gourji'
    ],
    [
        'name' => 'description',
        'content' => 'Мы выполняем все виды работ по ремонту ювелирных изделий'
    ],
    [
        'property' => 'og:title',
        'content' => $this->title
    ],
    [
        'property' => 'og:image',
        'content' => Yii::$app->request->hostInfo . '/img/icon.jpg'
    ]
];
foreach ($metaTags as $meta){
    $this->registerMetaTag($meta);
}

$files = scandir(__dir__ . "/../../web/img/gallery");
shuffle($files);
function str_ends($string, $end)
{
    return (substr($string, -strlen($end), strlen($end)) === $end);
}

?>
<section id="text" class="wrapper">
    <div class="container">
        <h2 class="text-center text-danger">
            Сервисный центр находиться в самом сердце Москвы и на протяжении 15 лет завоевывал доверие и дружбу лучших
            мировых брендов ювелирного искусства.
        </h2>
        <h2 class="text-center text-danger">
            На данный момент <b>«Мир Ювелира»</b> оказывает полный спектр услуг по уходу и ремонту ювелирных изделий,
            ремонт
            часов, ремонт бижутерии, ремонт очков.
        </h2>
        <h2 class="text-center text-danger">
            Отличительной особенностью нашей компании является гибкость, чуткое отношение к пожеланиям своих клиентов и
            возможность пользоваться всеми видами услуг, входящих в область ювелирного дела, включая новейшие
            технологии.
        </h2>
    </div>
</section>

<div id="speciality" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Нам доверяют</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <h3>На данный момент «Мир Ювелира» является авторизированным сервисным центром таких компаний как:</h3>
        <br>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1 wow animated fadeInLeft">
                <a href="https://boscofamily.ru/brands/sublime-by-bosco.html">
                    <img class="img-responsive" src="img/SublimebyBosco.png" alt="">
                </a>
                <h3>Sublime by Bosco</h3>
            </div>
            <div class="col-sm-2 wow animated fadeInRight">
                <a href="https://www.chaumet.com/">
                    <img class="img-responsive" src="img/chaumet.jpg" alt="">
                </a>
                <h3>Chaumet</h3>
            </div>
            <div class="col-sm-2 wow animated bounceInUp">
                <a href="https://www.hstern.net/">
                    <img class="img-responsive" src="img/Pomellato.png" alt="">
                </a>
                <h3>Pomellato</h3>
            </div>
            <div class="col-sm-2 wow animated bounceInDown">
                <a href="http://www.pomellato.com/us/">
                    <img class="img-responsive" src="img/h.stern.png" alt="">
                </a>
                <h3>H.Stern</h3>
            </div>
            <div class="col-sm-2 wow animated fadeInRight">
                <a href="http://www.mauboussin.com">
                    <img class="img-responsive" src="img/mauboussin.jpg" alt="">
                </a>
                <h3>mauboussin</h3>
            </div>


            <div class="clearfix"></div>
            <hr>
            <div class="col-sm-2 col-sm-offset-3 wow animated fadeInRight">
                <a href="http://www.pomellato.com/us/">
                    <img class="img-responsive" src="img/gourju.png" alt="">
                </a>
                <h3>Gourji</h3>
            </div>
            <div class="col-sm-2  wow animated bounceInUp">
                <a href="http://www.pomellato.com/us/">
                    <img class="img-responsive" src="img/tous.png" alt="">
                </a>
                <h3>Tous</h3>
            </div>
            <div class="col-sm-2  wow animated fadeInRight">
                <a href="http://juvelirtorg.spb.ru/">
                    <img class="img-responsive" src="img/torg.jpg" alt="">
                </a>
                <h3>Ювелирторг</h3>
            </div>

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#speciality -->

<section id="features" class="wrapper features">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Полный спектр услуг сервиса</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>

        <div class="col-md-6 col-sm-12 wow animated fadeInRight">
            <h3><i class="fa fa-check-circle-o text-success"></i> Ремонт ювелирных изделий</h3>
            <h3><i class="fa fa-check-circle-o text-success"></i> Ремонт бижутерии</h3>
            <h3><i class="fa fa-check-circle-o text-success"></i> Ремонт часов</h3>
            <h3><i class="fa fa-check-circle-o text-success"></i> Ремонт очков</h3>
            <h3><i class="fa fa-check-circle-o text-success"></i> Реставрация ювелирных изделий</h3>
            <h3><i class="fa fa-check-circle-o text-success"></i> Реставрация часов</h3>
        </div>

        <div class="col-md-6 col-sm-12 wow animated fadeInRight">
            <img src="/img/services/servises-09.jpg" style="margin: 10px 0" class="img-responsive">
        </div>

        <h2 class="animation-box wow bounceIn animated">Наши Услуги</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12 wow animated fadeInLeft">
                <img src="/img/services/servises-01.jpg" style="margin: 10px 0" class="img-responsive">
                <img src="/img/services/servises-05.jpg" style="margin: 10px 0" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-12 wow animated fadeInRight">
                <div class="features-list">
                    <h3>Мы выполняем все виды работ по <br> ремонту <br> ювелирных изделий:</h3>
                    <ul class="right">
                        <li class="li"><i class="fa fa-check text-success"></i> Лазерная пайка (производится при Вас)
                        </li>
                        <li class="li">
                            <i class="fa fa-check text-success"></i> Востановление покрытий (производится при Вас):
                            <ul>
                                <li class="li"><i class="fa fa-check text-success"></i> родирование - белое, черное</li>
                                <li class="li"><i class="fa fa-check text-success"></i> золочение - желтое</li>
                            </ul>
                        </li>
                        <li class="li">
                            <i class="fa fa-check text-success"></i> Граверные работы:
                            <ul>
                                <li class="li"><i class="fa fa-check text-success"></i> Лазерная гравировка</li>
                                <li class="li"><i class="fa fa-check text-success"></i> Ручная гравировка</li>
                            </ul>
                        </li>
                        <li class="li"><i class="fa fa-check text-success"></i> Изменение размера кольца</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Ремонт цепочек</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Ремонт и замена замка</li>
                    </ul>
                </div> <!-- .features-list -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6 col-sm-12 wow animated fadeInLeft">
                <div class="features-list">
                    <ul class="right">
                        <li class="li"><i class="fa fa-check text-success"></i> Ультразвуковая чистка</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Полировка изделий и корпусов</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Закрепка камней</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Огранка камней</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Ювелирная эмаль</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Заказ драгоценных и полудрагоценных
                            камней
                            (по
                            огранке, по качеству)
                        </li>
                        <li class="li"><i class="fa fa-check text-success"></i> Восстановление утерянного, парного
                            украшения
                        </li>
                        <li class="li"><i class="fa fa-check text-success"></i> Реставрация старинных колец и часов</li>
                        <li class="li"><i class="fa fa-check text-success"></i> Заказ драгоценных и полудрагоценных
                            камней
                            (по огранке, по качеству)
                        </li>
                    </ul>
                </div> <!-- .features-list -->
            </div>
            <div class="col-md-6 col-sm-12 wow animated fadeInRight">
                <img src="/img/services/servises-04.jpg" style="margin: 10px 0" class="img-responsive">
                <img src="/img/services/servises-03.jpg" style="margin: 10px 0" class="img-responsive">
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /#features -->

<div id="team" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Наши преимущества</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12 wow animated fadeInleft text-left">
                <h3><i class="fa fa-check-circle-o text-success"></i> Контроль качества на всех этапах работ</h3>
                <h3><i class="fa fa-check-circle-o text-success"></i> Высокое современное оборудование</h3>
                <h3><i class="fa fa-check-circle-o text-success"></i> Профессиональный подбор высококвалифицированных
                    мастеров</h3>
                <h3><i class="fa fa-check-circle-o text-success"></i> Удобное расположение в центре Москвы ЦАО</h3>
                <h3><i class="fa fa-check-circle-o text-success"></i> Гибкая система лояльности для постоянных клиентов
                </h3>
            </div>
            <div class="col-md-6 col-sm-6 wow animated fadeInRight">
                <img src="img/advantage.jpg" alt="" class="left-img img-responsive">
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#team -->

<section id="gallery" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Галерея</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-xs-12">
                <div id="screenshots" class="owl-carousel owl-theme">
                    <?php foreach ($files as $file): ?>

                        <?php if (str_ends($file, '.jpg') || str_ends($file, '.png')): ?>
                            <a href="/img/gallery/<?= $file ?>" class="item wow flipInY animated animated"
                               data-lightbox-gallery="screenshots">
                                <img src="/img/gallery/<?= $file ?>" class="img_res wow animated zoomIn" alt="">
                            </a>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
                <div class="customNavigation row">
                    <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn next gallery-nav wow animated bounceInRight"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HHHHHHHHHHHHHHHHHH      Development Team      HHHHHHHHHHHHHHHH -->


<!-- HHHHHHHHHHHHHHHHHH        Contact Us          HHHHHHHHHHHHHHHH -->
<section id="contact" class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="contact-item wow animated fadeInLeft">
                            <i class="fa fa-phone"></i>
                            <br>
                            <h3>Телефон</h3>
                            <p class="contact">+7 499 344 0004 ; +7 909 623 4000</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="contact-item wow animated fadeInLeft">
                            <i class="fa fa-envelope"></i>
                            <br>
                            <h3>Электронная почта</h3>
                            <p class="contact"><a href="mailto:didiamonds@mail.ru">didiamonds@mail.ru</a></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="contact-item wow animated fadeInLeft">
                            <i class="fa fa-home"></i>
                            <br>
                            <h3>Адрес</h3>
                            <p class="contact">ТЦ Славянский, Никольская ул, 17, строение 2, офис 7</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
                    </div>

                <?php else: ?>

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'Имя']) ?>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'Электронная почта']) ?>
                        </div>
                        <div class="col-sm-4 col-xs-12">

                            <?= $form->field($model, 'phone')->label(false)->textInput(['placeholder' => 'Телефон']) ?>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <?= $form->field($model, 'text')->label(false)->textarea(['rows' => 6, 'placeholder' => 'Сообщение']) ?>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <?= $form->field($model, 'verifyCode')->label('введите код с картинки')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-md-3">{image}</div><div class="col-md-6">{input}</div></div>',
                            ]) ?>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-sub', 'name' => 'contact-button', 'id' => 'submit']) ?>
                            </div>
                        </div>

                    </div>
                    <?php ActiveForm::end(); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <iframe src="https://yandex.ru/map-widget/v1/-/CBB1ZXH8sD" width="100%" height="300" frameborder="1" allowfullscreen="true"></iframe>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /#contact -->