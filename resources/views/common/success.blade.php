
@extends('layouts.main')
@section ('title','SVALKA24-Обращение отправлено')
@section('menu')
    <li><a href="#services-section" class="page-scroll">Как?</a></li>
    <li><a href="#works-section" class="page-scroll">Что?</a></li>
    <li><a href="#about-section" class="page-scroll">Кто?</a></li>
    <li><a href="#contact-section" class="page-scroll">Контакты</a></li>
@endsection
@section('content')

    <header class="text-center" name="home">
        <div class="intro-text">
            <h1 class="wow fadeInDown"><strong><span class="color">Спасибо,</span>что не остались равнодушными</strong></h1>
            <p class="wow fadeInDown">Мы вскоре ответим Вам</p>
            <a href="task" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Еще хотите?</a> </div>
    </header>

    <!-- Services Section -->
    <div id="services-section" class="text-center">
        <div class="container">
            <div class="section-title wow fadeInDown">
                <h2><strong>Как мы работаем</strong></h2>
                <hr>
                <div class="clearfix"></div>
                <p>Некоторые вещи в Вашем доме со временем оказываются лишними, и Вы принимаете решение выкинуть их на помойку. Хотя кто то решит что нужно их отвезти в гараж, на дачу, но чаще всего им так и не найдя им подходящего применения, вы понимаете, что Ваше помещение становится промежуточным захламленным пунктом между домом и помойкой.Мы предлагаем избавиться от вещей, но сделать это с пользой для себя и других. Как?-спросите Вы. Очень просто: вы заполняете форму, прикладываете фотографии и отправляете нам заявку. Мы рассматриваем, и тут же присылаем на указанный электронный адрес ответ, в котором мы напишем наше решение о вывозе Ваших вещей. Сдавая вещи на свалку,вы не только сберегаете природу, но и учавствуете в благотворительной помощи нуждающимся. Мы передаем часть вырученных средств от реализаци Вашего имущества в детские дома, благотворительные фонды. В скором времени на нашем сайте начнет работать личный кабинет, где, зарегистрировавшись, вы сможете отследить, в какие фонды направлены средства от реализации Вашего имущества. Итак, основные шаги:</p>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="200ms"> <i class="fa fa-desktop"></i>
                    <h4><strong>ПОКАЖИТЕ НАМ ВЕЩИ</strong></h4>
                    <p>Просто пришлите нам описание и фото вещей, воспользовавшись формой на сайте.</p>
                </div>
                <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="400ms"> <i class="fa fa-gears"></i>
                    <h4><strong>МЫ ОБРАБОТАЕМ ЗАЯВКУ</strong></h4>
                    <p>На указанный в форме e-mail вам прийдет письмо от нас с нашим решением.</p>
                </div>
                <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="600ms"> <i class="fa fa-bullhorn"></i>
                    <h4><strong>ДОГОВАРИВАЕМСЯ ОБ УДОБНОМ ВРЕМЕНИ</strong></h4>
                    <p>Если мы договорились, договариваемся в какое время вывести хлам. Машина и грузчики-бесплатно.</p>
                </div>
                <div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="800ms"> <i class="fa fa-rocket"></i>
                    <h4><strong>ЛЕТИМ К ВАМ</strong></h4>
                    <p>Мы летим к Вам.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section -->
    <div id="works-section" class="text-center">
        <div class="container"> <!-- Container -->
            <div class="section-title wow fadeInDown">
                <h2>Что мы <strong>принимаем:</strong></h2>
                <hr>
                <span>Коротко: мы бесплатно вывозим и принимаем практически все за исключением строительного мусора, ломанных вещей, ломанной мебели и рваной, грязной одежды. </span>
                <div class="clearfix"></div>
            </div>
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter=".web" class="www">Принимаем</a></li>
                            <li><a href="#" data-filter=".app">Не принимаем</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item wow" data-wow-delay="200ms">
                            <div class="hover-bg"> <a href="#" class="portfolio-link" data-toggle="modal">
                                    <div class="hover-text">
                                        <h4>Книги</h4>
                                        Книги, журналы, макулатуру
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i> </div>
                                    <img src="img/portfolio/01.jpg" class="img-responsive" alt="Книги"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item wow" data-wow-delay="400ms">
                            <div class="hover-bg"><a href="#" class="portfolio-link" data-toggle="modal">
                                    <div class="hover-text">
                                        <h4>Мебель</h4>
                                        Мебель и предметы интерьера
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i> </div>
                                    <img src="img/portfolio/02.jpg" class="img-responsive" alt="Мебель"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item wow" data-wow-delay="600ms">
                            <div class="hover-bg"> <a href="#" class="portfolio-link" data-toggle="modal">
                                    <div class="hover-text">
                                        <h4>Картины</h4>
                                        Картины любых авторов и направлений
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i> </div>
                                    <img src="img/portfolio/03.jpg" class="img-responsive" alt="Картины"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item wow" data-wow-delay="800ms">
                            <div class="hover-bg"> <a href="#" class="portfolio-link" data-toggle="modal">
                                    <div class="hover-text">
                                        <h4>Холодильники, телевизоры, радиолы, детские игрушки</h4>
                                        Коляски, велосиипеды, роликовые коньки, лыжи.
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i> </div>
                                    <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item wow" data-wow-delay="1000ms">
                            <div class="hover-bg"> <a href="#" class="portfolio-link" data-toggle="modal">
                                    <div class="hover-text">
                                        <h4>Автомобили и все что с ними связано</h4>
                                        Старые авто, мотоциклы, покрышки, диски и т.д
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i> </div>
                                    <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item wow" data-wow-delay="1200ms">
                            <div class="hover-bg"> <a href="#" class="portfolio-link" data-toggle="modal">
                                    <div class="hover-text">
                                        <h4>Не принимаем строительный и бытовой мусор</h4>
                                        Строительный и бытовой мусор, разного вида отходы
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i> </div>
                                    <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div id="about-section">
        <div class="container">
            <div class="section-title text-center wow fadeInDown">
                <h2><strong>Кто мы</h2>
                <hr>
                <div class="clearfix"></div>
                <p>Мы-команда WEB-программистов, решивших помочь планете и людям.</p>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInLeft"> <img src="img/about.png" class="img-responsive"> </div>
                <div class="col-md-6 wow fadeInRight">
                    <h4>Начало</h4>
                    <p>Однажды задумавшись над ситуацией в мире, мы решили, что надо что-то менять. Сложная геополитическая обстановка, а так же экологическая ситуация . И менять надо начинать с себя. Мы решили собрать все ненужные вещи, продать, и вырученные деньги отдать нуждающимся.</p>
                    <div class="space"></div>
                    <h4>Как мы это сделали</h4>
                    <p>Посмотрев что есть ненужного у нас и узнакомых, оказалось около 100 кг ненужных вещей. Все было в приличном состоянии. Мы решили что все вещи можно реализовать. И получилось, а это немного-немало около 50 тысяч рублей. Так пришла идея свалки - собирать ненужные людям вещи, продавать, и часть вырученных средств направлять в благотворительные фонды в помощь нуждающимся. Все имена благотворителей навсегда останутся в истории свалки и каждый отдающий будет знать сколько средств от продажи пошло в тот или иной фонд. Мы сотрудничаем и помогаем:</p>
                    <div class="space"></div><div class="list-style">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li>Детские сады</li>
                                    <li>Школы</li>
                                    <li>Благотворительные фонды</li>
                                    <li>Школы для детей с ограниченными возможностями</li>
                                    <li>Приюты и ночлежки</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li></li>
                                    <li>Фонд Константина Хабенского</li>
                                    <li>Фонд «Близко к сердцу»</li>
                                    <li>Детский Благотворительный Фонд</li>
                                    <li>"Милосердие Детям", Благотворительный Фонд</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact-section" class="text-center">
        <div class="container">
            <div class="section-title wow fadeInDown">
                <h2><strong>Свяжитесь</strong> c нами</h2>
                <hr>
                <p>Мы работаем с 10.00 до 19.00 и вы можете задавать все интересующие вопросы.</p>
            </div>
            <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
                    <p>194352 ул.Руднева 22-2
                        <br>
                        Санкт-Петербург</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
                    <p>support@svalka24.ru</p>
                </div>
                <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
                    <p> +7 921 640 81 11</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="400ms">
                <h3>Отправьте нам сообщение</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Имя" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="e-mail" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Сообщение" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>
                <div class="social">
                    <ul>
                        <li><a href="https://vk.com/svalka_24"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>

@endsection