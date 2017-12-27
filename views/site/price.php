<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Стоимость Ремонта';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'ремонт часов в москве, диагностика часов в москве, замена элементов питания часов в москве'
]);
$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $this->title
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => '/img/kremlinwatchservice.jpg'
]);
$this->params['active'] = 'price';
?>

<div id="second-section">
    <div class="container">
        <div class="space"></div>
        <div class="section-title">
            <h2><?= $this->title ?></h2>
            <hr>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-12">
                <h4>Брэнды</h4>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                              data-toggle="tab">первый</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Второй</a>
                    </li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Третий</a>
                    </li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Четвертый</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="space"></div>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">August
                            Raymond
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Mido
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Longines
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Edox
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Eterna
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Marvin
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Nina
                            Ricci
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Oris
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Revue
                            Thommen
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">
                            Frederique
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Constant
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Bulova
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Jacques
                            Lemans
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Eterna
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Maurice
                            Lacroix
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Jean
                            Marcel
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Busherer
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">K. Mozer
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Сhristian
                            Dior
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Gustav
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Becker
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">louis
                            Erard
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Paul
                            Nickel
                        </button>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#price1">Michel
                            Herbelin
                        </button>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">2</div>
                    <div role="tabpanel" class="tab-pane" id="messages">3</div>
                    <div role="tabpanel" class="tab-pane" id="settings">4</div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>


<!-- MODALS -->


<div id="price1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Первый</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-success">Общий ремонт механизма. <b>Гарантия</b> на выполненные работы составляет <b>12 месяцев.</b></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Механические часы с ручным заводом</th>
                            <td>7300</td>

                        </tr>
                        <tr>
                            <th>Механические часы с автоподзаводом</th>
                            <td>9500</td>

                        </tr>
                        <tr>
                            <th>Механический хронограф</th>
                            <td>16550</td>

                        </tr>
                        <tr>
                            <th>Механизм с накладным модулем</th>
                            <td>21600</td>

                        </tr>
                        <tr>
                            <th>Кварцевые часы</th>
                            <td>6600</td>

                        </tr>
                        <tr>
                            <th>Кварцевый хронограф</th>
                            <td>11400</td>

                        </tr>
                        <tr>
                            <th>Сложный кварцевый хронограф</th>
                            <td>14500</td>

                        </tr>
                        <tr>
                            <th>Кварцевые часы типа «Автокварц»</th>
                            <td>11150</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Наценка на выполняемые виды работ (Плюс к базовой стоимости )</h3></th>
                        </tr>
                        <tr>
                            <th>Одна дополнительная функция</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Две и более дополнительных функций</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Часы в корпусе из драгметалла и или с драгоценными камнями</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы со следами коррозии</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Хронометрированный механизм</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы с механизмом еtа 2000-1</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Срочный ремонт в течении 3 суток</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Нестандартные виды работ согласовываются дополнительно с мастером</h3></th>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в простых часах</th>
                            <td>1100</td>

                        <tr>
                            <th>Замена элементов питания в хронографе</th>
                            <td>1450</td>

                        </tr>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в часах с нестандартным извлечением</th>
                            <td>2150</td>

                        </tr>
                        <tr>
                            <th>Подгонка браслета. Замена ремня. Штифта</th>
                            <td>От 500</td>

                        </tr>
                        <tr>
                            <th>Замена уплотнителя задней крышки</th>
                            <td>От 600</td>

                        </tr>
                        <tr>
                            <th>Установка съемного ушка</th>
                            <td>От 250</td>

                        </tr>
                        <tr>
                            <th>Чистка браслета часов ультразвуком</th>
                            <td>От 1200</td>

                        </tr>
                        <tr>
                            <th>Регулировка точности хода в механических часах ( без гарантии)</th>
                            <td>800</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Изготовление и замена стекол</h3></th>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (без ремонта механизма )</th>
                            <td>2950</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (с ремонтом механизма )</th>
                            <td>1700</td>

                        </tr>
                        <tr>
                            <th>Сфера, минеральное (без ремонта механизма)</th>
                            <td>3500</td>

                        </tr>
                        <tr>
                            <th>Сфера, минеральное ( с ремонтом механизма )</th>
                            <td>2500</td>

                        </tr>
                        <tr>
                            <th>Фигурное минеральное (без ремонта механизма)</th>
                            <td>3500</td>

                        </tr>
                        <tr>
                            <th>Фигурное минеральное с ремонтом механизма</th>
                            <td>2100</td>

                        </tr>
                        <tr>
                            <th>«Мост», минеральное (без ремонта механизма )</th>
                            <td>3900</td>

                        </tr>
                        <tr>
                            <th>«Мост» минеральное (с ремонтом механизма)</th>
                            <td>2500</td>

                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (без ремонта механизма)</th>
                            <td>4900</td>

                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (с ремонтом механизма)</th>
                            <td>3500</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (без ремонта механизма)</th>
                            <td>4900</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (с ремонтом механизма)</th>
                            <td>4000</td>

                        </tr>
                        <tr>
                            <th>Диагностика часов</th>
                            <td>800</td>

                        </tr>
                        <tr>
                            <th>Замена люминисцентной массы на стрелках</th>
                            <td>От 900</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
        </div>
    </div>


    <div id="price2" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>
    <div id="price3" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>
    <div id="price4" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>
    <div id="price5" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>