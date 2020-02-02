<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Miracle Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- carousel.min.css -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <!-- owl.theme.css -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <!-- fontawesomes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="wrapper">
    <header class="header" id="home">
        <div class="top__part">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="info">
                            <li class="info__list">
                                <a href="mailto:miracleacademyuz@gmail.com" class="info__link"><i class="fa fa-envelope" aria-hidden="true"></i>miracleacademyuz@gmail.com</a>
                            </li>
                            <li class="info__list">
                                <a href="tel:+998946863999" class="info__link"><i class="fa fa-phone" aria-hidden="true"></i>+998 71 200 69 99</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End of top__part -->

        <!-- navbar starts here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white animated">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="image/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" id="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Главная<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#course">Курсы
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#cost">Цены</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Команда</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Галерея</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testomonial">Ваканции</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="slidder">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/1.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption_wrapper">
                            <h5 class="main__heading">Программирование для взрослых</h5>
                            <div class="course__wrap">
                                <ul class="course__list" style="padding-right:55px;">
                                    <li class="head">Веб - программирование</li>
                                    <li class="course__item">HTML, CSS, PHP</li>
                                    <li class="course__item">JAVA SCRIPT, NODE JS</li>
                                    <li class="course__item">JQERY, PYTHON MYSQL</li>
                                </ul>
                                <ul class="course__list">
                                    <li class=" head">ИТ - программирование</li>
                                    <li class="course__item">JAVA, C++ ,C#</li>
                                    <li class="course__item">KOTLIN, RUST</li>
                                    <li class="course__item">SWIFT, GO</li>
                                </ul>
                            </div>
                            <a href="https://web.telegram.org/#/im?p=@anvarodilov" class="registration">Зарегистрировать своего ребенка</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/2.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption_wrapper">
                            <h5 class="main__heading">Программирование для детей</h5>
                            <div class="course__wrap">
                                <ul class="course__list" style="padding-right:55px;">
                                    <li class="course__item">SCRATCH</li>
                                    <li class="course__item">SNAP</li>
                                    <li class="course__item">APP INVENTOR</li>
                                </ul>
                            </div>
                            <a href="#" class="registration">Зарегистрировать своего ребенка</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/3.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption_wrapper">
                            <h5 class="main__heading">Ментальная арифметика</h5>
                            <div class="course__wrap">
                                <ul class="course__list" style="padding-right:55px;">
                                    <li class="course__item">Мыслить аналитически <br> и творчески</li>
                                    <li class="course__item">Быть <br> наблюдательным</li>
                                </ul>
                                <ul class="course__list">
                                    <li class="course__item">Запоминать очень <br> быстро</li>
                                    <li class="course__item">Быть уверенным в <br> своих силах</li>
                                </ul>
                            </div>
                            <a href="#" class="registration">Зарегистрировать своего ребенка</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/4.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption_wrapper">
                            <h5 class="main__heading">Курсы по робототехнику</h5>
                            <div class="course__wrap">
                                <ul class="course__list" style="padding-right:55px;">
                                    <li class="course__item">Подготовка робота<br>к сборке</li>
                                    <li class="course__item">написанной программе<br></li>
                                </ul>
                                <ul class="course__list">
                                    <li class="course__item">основы электроники<br>и компьютерной грамотности</li>
                                    <li class="course__item">технический английский язык<br> своих силах</li>
                                </ul>
                            </div>
                            <a href="https://web.telegram.org/#/im?p=@anvarodilov" class="registration">Зарегистрировать своего ребенка</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="image/5.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption_wrapper">
                            <h5 class="main__heading">Программирование для взрослых</h5>
                            <div class="course__wrap">
                                <ul class="course__list" style="padding-right:55px;">
                                    <li class="head">Веб - программирование</li>
                                    <li class="course__item">HTML, CSS, PHP</li>
                                    <li class="course__item">JAVA SCRIPT, NODE JS</li>
                                    <li class="course__item">JQERY, PYTHON MYSQL</li>
                                </ul>
                                <ul class="course__list">
                                    <li class=" head">ИТ - программирование</li>
                                    <li class="course__item">JAVA, C++ ,C#</li>
                                    <li class="course__item">KOTLIN, RUST</li>
                                    <li class="course__item">SWIFT, GO</li>
                                </ul>
                            </div>
                            <a href="https://web.telegram.org/#/im?p=@anvarodilov" class="registration">Зарегистрировать своего ребенка</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><!-- End of slidder -->
    <div class="adv">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="image/books.png" alt="books" class="adv__image">
                    <p>Множество <br> курсов</p>
                </div>
                <div class="col-md-3">
                    <img src="image/innovation.png" alt="innovation" class="adv__image">
                    <p>Современная <br> программа</p>
                </div>
                <div class="col-md-3">
                    <img src="image/premium.png" alt="premium" class="adv__image">
                    <p>Комфортные <br> условия</p>
                </div>
                <div class="col-md-3">
                    <img src="image/star (1).png" alt="stars" class="adv__image">
                    <p>Индивидуальных <br> подход</p>
                </div>
            </div>
        </div>
    </div>
    <!-- about us -->
    <div class="about__us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about__us-heading"><span>Учебный Центр</span>Miracle Academy</h1>
                    <p class="about__us-paragraph">Самая лушчая инвестиция это образование, как <br> для ребенка так и для взрослых.</p>
                    <p class="about__us-paragraph">Наш образовательный центр рад предложить вам <br> учебный программы различных направлений. У нас есть <br> группы как для самых маленьких, так и для тех кто хочет <br> получить дополнительную профессию или расширить <br> кругозор.</p>
                    <a href="https://web.telegram.org/#/im?p=@MiracleAcademyUz" class="about__us-btn ">Читать больше</a>
                </div>
                <div class="col-md-6">
                    <div class="about__us-item">
                        <a href="#"><img class="about__us-img img-fluid" src="image/pencil.png" alt=""></a>
                        <a href="#"><img class="about__us-img img-fluid" src="image/document.png" alt=""></a>
                    </div>
                    <div class="about__us-item">
                        <a href="#"><img class="about__us-img img-fluid" src="image/shelf.png" alt=""></a>
                        <a href="#"><img class="about__us-img img-fluid" src="image/building.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of about us -->
    <div class="our__course" id="course">
        <div class="container">
            <div class="top__course clearfix">
                <h2 class=" price__heading float-left">Наши курсы</h2>
                <a href="#" class="link__to-prices float-right">Наши курсы
                    Посмотреть все курсы</a>
            </div>
            <div class="course__list">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="mentalniy">
                            <a href="#"><img src="image/mentalniy.png" alt="mentalniy" class="img-fluid"></a>
                            <p>Ментальная арифметика</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="graphic__design">
                            <a href="#"><img src="image/laptop.png" alt=""></a>
                            <p>Ментальная арифметика</p>
                        </div>
                        <div class="course__item-wrap clearfix">
                            <div class="web__dev float-left">
                                <a href="#"><img src="image/web.png" alt="web development"></a>
                                <p>Веб-разработка</p>
                            </div>

                            <div class="english float-right">
                                <a href="#"><img src="image/english.png" alt="english pic"></a>
                                <p>Английский язык</p>
                            </div>
                        </div><!-- End of cousze item wrap -->


                    </div>
                </div>
            </div>
        </div>
    </div><!-- End of our course -->
    <!-- cost of courses -->
    <div class="course__price" id="cost">
        <div class="container">
            <div class="price__head clearfix">
                <h2 class=" price__heading float-left ">Наши цены</h2>
                <a href="#" class="link__to-prices float-right ">Посмотреть все цены</a>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="price__item">
                        <h4>English Language</h4>
                        <ul class="include">
                            <li class="include__item">Группа 13 (±1) Учеников</li>
                            <li class="include__item">2 книги ( Students book and Home book)</li>
                            <li class="include__item">Фирменная Тетрадь Grammar и Vocabulary</li>
                            <li class="include__item">Сервис Academic Support</li>
                            <li class="include__item">Live Трансляция каждого урока</li>
                        </ul>
                        <p class="cost">480 000 UZS</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 ">
                    <div class="price__item">
                        <h4>English Language</h4>
                        <ul class="include">
                            <li class="include__item">Группа 13 (±1) Учеников</li>
                            <li class="include__item">2 книги ( Students book and Home book)</li>
                            <li class="include__item">Фирменная Тетрадь Grammar и Vocabulary</li>
                            <li class="include__item">Сервис Academic Support</li>
                            <li class="include__item">Live Трансляция каждого урока</li>
                        </ul>
                        <p class="cost">480 000 UZS</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="price__item">
                        <h4>English Language</h4>
                        <ul class="include">
                            <li class="include__item">Группа 13 (±1) Учеников</li>
                            <li class="include__item">2 книги ( Students book and Home book)</li>
                            <li class="include__item">Фирменная Тетрадь Grammar и Vocabulary</li>
                            <li class="include__item">Сервис Academic Support</li>
                            <li class="include__item">Live Трансляция каждого урока</li>
                        </ul>
                        <p class="cost">480 000 UZS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of cost of courses -->
    <!-- our team section start here -->
    <div class="our__team" id="team">
        <div class="container">
            <div class="top__our-team clearfix">
                <h3 class=" team float-left">Команда</h3>
                <p class="team__description float-right">Профессионалы Ташкента с нами!</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl__wrap">
                        <img src="image/miracle pics/staff/staff.JPG" alt="">
                        <div class="description">
                            <p class="title">Наши преподаватели</p>
                            <p class="name">Mr. Smith</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="owl__wrap">
                        <img src="image/miracle pics/staff/staff.JPG" alt="">
                        <div class="description">
                            <p class="title">Наши преподаватели</p>
                            <p class="name">Mr. Smith</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl__wrap">
                        <img src="image/miracle pics/staff/staff.JPG" alt="">
                        <div class="description">
                            <p class="title">Наши преподаватели</p>
                            <p class="name">Mr. Smith</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl__wrap">
                        <img src="image/miracle pics/staff/staff.JPG" alt="">
                        <div class="description">
                            <p class="title">Наши преподаватели</p>
                            <p class="name">Mr. Smith</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End of our team -->
    <div class="gallery" id="gallery">
        <div class="container top__gallery">
            <div class="row">
                <div class="col-md-4">
                    <div class="our__client">
                        <h3>Отзывы наших клиентов</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="client__info">
                        <div class="img__wrap">
                            <div class="client__personal">
                                <img src="image/mark.png" alt="">
                            </div>
                            <div class="client__name">
                                <p><span>Mark</span> Zuckerberg</p>
                                <div class="status">
                                    Developer
                                </div>
                            </div>
                        </div>
                        <p class="client__gaps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="client__info">
                        <div class="img__wrap">
                            <div class="client__personal">
                                <img src="image/mark.png" alt="">
                            </div>
                            <div class="client__name">
                                <p><span>Mark</span> Zuckerberg</p>
                                <div class="status">
                                    Developer
                                </div>
                            </div>
                        </div>
                        <p class="client__gaps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div><!-- End of  -->
        </div>
        <div class="container">
            <h3 class="gallery__heading">Галерея</h3>
            <div class="row">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/03 mental/DSC08993.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/03 mental/DSC08993.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/03 mental/DSC09004.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/03 mental/DSC09004.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/03 mental/DSC09005.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/03 mental/DSC09005.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/04 shaxmat/2.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/04 shaxmat/2.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/04 shaxmat/9.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/04 shaxmat/9.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/04 shaxmat/8.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/04 shaxmat/8.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-image="image/miracle pics/04 shaxmat/13.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/04 shaxmat/13.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/05 dam olish xonasi/DSC09213.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/05 dam olish xonasi/DSC09213.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/05 dam olish xonasi/DSC09215.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/05 dam olish xonasi/DSC09215.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/07 hamma shaxmat/DSC09375.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/07 hamma shaxmat/DSC09375.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/07 hamma shaxmat/DSC09370.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/07 hamma shaxmat/DSC09370.JPG" alt="Another alt text">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miracle Academy" data-image="image/miracle pics/09 taqdirlash mental/DSC09441.JPG" data-target="#image-gallery">
                            <img class="img-thumbnail" src="image/miracle pics/09 taqdirlash mental/DSC09441.JPG" alt="Another alt text">
                        </a>
                    </div>
                </div>
                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                </button>
                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our team section end here -->
        <!-- footer start here -->
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="bottom__logo"><img src="image/logo_white.png" alt=""></a>
                    <ul class="social-networks">
                        <li><a class="facebook" href="https://www.facebook.com/search/top/?q=miracle%20academy&epa=SEARCH_BOX"><i class="fa  fa-facebook"></i></a></li>
                        <li><a class="telegram" href="https://t.me/MiracleAcademyUz"><i class="	fa fa-paper-plane-o"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/miracleacademyuz/"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="vkontact" href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="bottom__heading">Быстрые ссылки</h5>
                    <ul class="bottom__menu" id="navbottom">
                        <li class="menu__list"><a href="#home" class="menu__link">Главная</a></li>
                        <li class="menu__list"><a href="#about" class="menu__link">О нас</a></li>
                        <li class="menu__list"><a href="#course" class="menu__link">Курсы</a></li>
                        <li class="menu__list"><a href="#cost" class="menu__link">Цены</a></li>
                    </ul>
                    <ul class="bottom__menu">
                        <li class="menu__list"><a href="#job" class="menu__link">Ваканции</a></li>
                        <li class="menu__list"><a href="#gallery" class="menu__link">Галерея</a></li>
                        <li class="menu__list"><a href="#team" class="menu__link">Команда</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="bottom__heading">Контакты</h5>
                    <p class="bottom__adress"><i class="fa fa-phone"></i> +998 71 200 69 99</p>
                    <p class="bottom__adress"><i class="fa fa-envelope"></i>info@miracleacademy.uz</p>
                    <p class="bottom__adress"><i class="fa fa-map-marker"></i>Учтепа, ул Фархадская дом 7, Ориентир: комплекс Оазис <br>Шайхонтохур, ул Гунча, Ориентир: рядом Райхон</p>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="copyright__text">© 2019 Barcha huquqlar himoyalangan | miracleacademy.uz</p>
        </div>
    </footer>
    <a id="return-top-top" href="#top" style="position: fixed; z-index: 2147483647; display: block;"><i class="fa fa-angle-up"></i></a>
</div>
<!-- End of wrapper -->
<!-- scripts -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
