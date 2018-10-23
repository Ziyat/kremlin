<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

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

?>
<!-- HHHHHHHHHHHHHHHHHH        Features         HHHHHHHHHHHHHHHH -->
<section id="features" class="wrapper features">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Наши Услуги</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-md-6 col-sm-6 wow animated fadeInLeft">
                <img src="img/services.jpg" alt="" class="pull-right left-img img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 wow animated fadeInRight">
                <div class="features-list">
                    <h3>Мы выполняем все виды работ по <br> ремонту <br> ювелирных изделий:</h3>
                    <ul class="right">
                        <li class="li"><i class="fa fa-chevron-right"></i> 3D моделирование и ручная работа
                        </li>
                        <li class="li">
                            <i class="fa fa-chevron-right"></i> Изготовление ювелирных изделий:
                            <ul>
                                <li class="li"><i class="fa fa-chevron-right"></i> по эскизу</li>
                                <li class="li"><i class="fa fa-chevron-right"></i> по образцу заказчика</li>
                                <li class="li"><i class="fa fa-chevron-right"></i> по нашему образцу, художественный
                                    дизайн
                                </li>
                            </ul>
                        </li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Лазерная пайка (производится при Вас)</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Ремонт ювелирных изделий</li>
                        <li class="li">
                            <i class="fa fa-chevron-right"></i> Востановление покрытий (производится при Вас):
                            <ul>
                                <li class="li"><i class="fa fa-chevron-right"></i> родирование - белое, черное</li>
                                <li class="li"><i class="fa fa-chevron-right"></i> золочение - желтое</li>
                            </ul>
                        </li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Реставрация ювелирных изделий</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Граверные работы</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Скупка золота и драгоценных камней</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Заказ драгоценных и полудрагоценных камней
                        </li>
                        <li class="li">
                            <i class="fa fa-chevron-right"></i>
                            Заказ драгоценных и полудрагоценных камней (по огранке, по качеству)
                        </li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Ремонт бижутерии</li>
                    </ul>
                </div> <!-- .features-list -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /#features -->


<!-- HHHHHHHHHHHHHHHHHH        Speciality         HHHHHHHHHHHHHHHH -->
<div id="speciality" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Нам доверяют</h2>
        <p>На данный момент «Мир Ювелира» является авторизированным сервисным центром таких компаний как:</p>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1 wow animated fadeInLeft">
                <a href="https://boscofamily.ru/brands/sublime-by-bosco.html">
                    <img class="img-responsive" src="img/SublimebyBosco.png" alt="">
                </a>
                <h3>Sublime by Bosco</h3>
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
            <div class="col-sm-2 wow animated bounceInUp">
                <a href="http://www.pomellato.com/us/">
                    <img class="img-responsive" src="img/tous.png" alt="">
                </a>
                <h3>Tous</h3>
            </div>
            <div class="col-sm-2 wow animated fadeInRight">
                <a href="http://www.pomellato.com/us/">
                    <img class="img-responsive" src="img/gourju.png" alt="">
                </a>
                <h3>Gourji</h3>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#speciality -->

<section id="gallery" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Галерея</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-xs-12">
                <div id="screenshots" class="owl-carousel owl-theme">
                    <a href="/img/gallery/g1.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g1.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
                    <a href="/img/gallery/g2.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g2.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
                    <a href="/img/gallery/g3.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g3.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
                    <a href="/img/gallery/g4.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g4.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
                    <a href="/img/gallery/g5.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g5.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
                    <a href="/img/gallery/g6.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g6.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
                    <a href="/img/gallery/g7.jpg" class="item wow flipInY animated animated" data-lightbox-gallery="screenshots">
                        <img src="/img/gallery/g7.jpg" class="img_res wow animated zoomIn" alt="">
                    </a>
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

<div id="team" class="wrapper">
    <div class="container">
        <h2 class="animation-box wow bounceIn animated">Наши преимущества</h2>
        <div class="virticle-line"></div>
        <div class="circle"></div>
        <div class="row">
            <div class="col-md-6 col-sm-6 wow animated fadeInLeft">
                <div class="features-list text-left">
                    <ul class="right">
                        <li class="li"><i class="fa fa-chevron-right"></i> Контроль качества на всех этапах работ</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Высокое современное оборудование</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Профессиональный подбор
                            высококвалифицированных мастеров
                        </li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Удобное расположение в центре Москвы ЦАО</li>
                        <li class="li"><i class="fa fa-chevron-right"></i> Гибкая система лояльности для постоянных
                            клиентов
                        </li>
                    </ul>
                </div> <!-- .features-list -->

            </div>
            <div class="col-md-6 col-sm-6 wow animated fadeInRight">
                <img src="img/advantage.jpg" alt="" class="pull-right left-img img-responsive">
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#team -->

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
                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-sub', 'name' => 'contact-button']) ?>
                            </div>
                        </div>

                    </div>
                    <?php ActiveForm::end(); ?>
                <?php endif; ?>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /#contact -->