<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>kmg-oms.kz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&700&display=swap"
            rel="stylesheet"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
    />
    <link
            rel="stylesheet"
            href="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"
    />
    <link
            rel="stylesheet"
            href="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"
    />
    <link href="./style.css" rel="stylesheet" />
</head>
<body>
<div class="header">
    <div class="header_top">
        <div class="container">
            <div class="header_top_container">
                <div class="logo">
                    <a href="index.php">
                        <img src="./img/logo.svg" alt="logo" />
                    </a>
                </div>
                <div class="buttons">
                    <nav class="buttons__langs">
                        <a href="#">Рус</a>
                        <a href="#">Қаз</a>
                        <a href="#">Лат</a>
                    </nav>
                    <div class="buttons__search">
                        <a href="#">
                            <img src="./img/search.svg" alt="search" />
                        </a>
                    </div>
                    <a href="#" class="d-none d-md-block buttons__contact">
                        Связаться с нами
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__menu">
        <div class="container">
            <div class="menu-nav">
                <button
                        class="menu_toggle menu-nav__btn d-block d-lg-none d-xl-none"
                >
                    Меню
                </button>
                <div class="menu-nav__list_toggle">
                    <a href="/management.html" class="menu-nav_item">О нас</a>
                    <a href="/test.html" class="menu-nav_item">Социальная ответственность</a>
                    <a href="#" class="menu-nav_item">Пресс-центр</a>
                    <a href="#" class="menu-nav_item">Закупки</a>
                    <a href="/purchase.html" class="menu-nav_item">Закупки 2017 год</a>
                    <a href="#" class="menu-nav_item">Молодой специалист</a>
                    <a href="#" class="menu-nav_item">Комплаенс</a>
                    <a href="/contacts.html" class="menu-nav_item">Контакты</a>
                </div>
                <div class="menu-nav__list d-none d-lg-flex d-xl-flex">
                    <a href="/management.html" class="menu-nav_item">О нас</a>
                    <a href="/test.html" class="menu-nav_item">Социальная ответственность</a>
                    <a href="#" class="menu-nav_item">Пресс-центр</a>
                    <a href="#" class="menu-nav_item">Закупки</a>
                    <a href="/purchase.html" class="menu-nav_item">Закупки 2017 год</a>
                    <a href="#" class="menu-nav_item">Молодой специалист</a>
                    <a href="#" class="menu-nav_item">Комплаенс</a>
                    <a href="/contacts.html" class="menu-nav_item">Контакты</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner">
    <div class="container">
        <h1 class="banner__title">
            Встреча ген. директора<br />ТОО «УзенМунайСервис»<br />
            с сотрудниками отчётной встречи
        </h1>
        <a href="#" class="banner_btn">Подробнее</a>
    </div>
</div>
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="news__nav">
                    <h2>Новости</h2>
                    <a href="./pressa.html" class="news__view"
                    >Посмотреть все новости<img src="./img/arrow-right.svg"
                        /></a>
                </div>

                <div class="row">


                            <?php
                            $noimg = './img/no-image.jpg';

                            $arr = [
                                [
                                    'id' => 1,
                                    'title' => 'Какая-то новость 1',
                                    'date' => '10.07.2022',
                                    'image_url' => './img/news1.jpg',
                                ],
                                [
                                    'id' => 2,
                                    'title' => 'Какая-то новость 2',
                                    'date' => '18.07.2022',
                                    'image_url' => './img/news2.png',
                                ],
                                [
                                    'id' => 3,
                                    'title' => 'Какая-то новость 3',
                                    'date' => '18.07.2022',
                                    'image_url' => '',
                                ],
                                [
                                    'id' => 4,
                                    'title' => 'Какая-то новость 4',
                                    'date' => '20.07.2022',
                                    'image_url' => './img/news3.png',
                                ]
                            ];

                            foreach($arr as $news){
                                if(strtotime($news['date']) <= time()): ?>
                            <div class="col-12 col-md-6">
                                <div class="news__col news__box">
                                            <img src="<?= !empty($news['image_url']) ? $news['image_url'] : $noimg ?>" alt="image" />
                                            <p class="news___date"><?=$news['date']; ?></p>
                                            <span><?=$news['title']; ?></span>

                                </div>
                            </div>
                                <?php
                                endif;
                            }
                            ?>



                </div>
            </div>
            <div class="d-none d-md-block col-md-1"></div>
            <div class="col-12 col-md-5">
                <div class="blog-border">
                    <h3>Блог Генерального директора</h3>
                    <img src="./img/blog1.jpg" alt="blog1" />
                    <p>
                        Сегодня интернет стал живой частью нашей жизни, новой формой
                        общения, современным способом организации коммуникации.
                    </p>
                    <p>
                        Уверен, что наши отношения будут активными и взаимовыгодными,
                        а блог-платформа станет настоящей популярной площадкой
                        для обмена мнениями.
                    </p>
                    <div class="row blog-bot">
                        <button
                                type="button"
                                class="btn blog-bot__btn col-auto"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                        >
                            Задать вопрос
                        </button>
                        <span class="blog-bot__name col"
                        >Мыңтұрғанов<br />
                  Қанағат Нұрымұлы</span
                        >
                    </div>
                    <div
                            class="modal fade"
                            id="exampleModal"
                            tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Задать вопрос
                                    </h5>
                                    <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label"
                                            >Получатель:</label
                                            >
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="recipient-name"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label"
                                            >Сообщение:</label
                                            >
                                            <textarea
                                                    class="form-control"
                                                    id="message-text"
                                            ></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                    >
                                        Закрыть
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partners">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>О партнерстве</h2>

                <p>
                    В 1972 году на основании приказа № 134 3/УП-72 объединения»
                    Мангышлакнефть «и приказа № 97 от 21 июля 1972 года
                    нефтегазодобывающего управления» Узеннефть «имени XXIII съезда
                    Коммунистической партии Советского Союза Ордена Трудового Красного
                    Знамени, с 1 июля 1972 года было введено в эксплуатацию
                    управление» повышение нефтеотдачи пластов и капитальный ремонт
                    скважин».
                </p>
                <p>
                    С 1 августа 1998 года управление «повышение нефтеотдачи пластов
                    и капитальный ремонт скважин» преобразовано в дочернее
                    товарищество акционерного общества «Озенмунайгаз» с ограниченной
                    ответственностью «ремонт».
                </p>
                <p>
                    В 1997 году при объединении» Озенмунайгаз «было создано
                    товарищество с ограниченной ответственностью» КРУЗ». Целью
                    был запуск новых мобильных установок «КРЕМКО-80 Д», получаемых
                    для капитального ремонта скважин.
                </p>
                <a href="./management.html" class="news__view"
                >Подробнее<img src="./img/arrow-right.svg"
                    /></a>
            </div>
            <div class="col-12 col-md-6">
                <div class="container_partner">
                    <img src="./img/partners1.png" alt="partners" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partners_logo">
    <div class="container">
        <h2>Наши партнеры</h2>
        <div class="owl-carousel owl_bottom">
            <div class="logo_img">
                <img src="./img/logo1.svg" alt="logo" />
            </div>
            <div class="logo_img">
                <img src="./img/logo2.svg" />
            </div>
            <div class="logo_img">
                <img src="./img/logo3.svg" />
            </div>
            <div class="logo_img">
                <img src="./img/logo4.svg" alt="" />
            </div>
            <div class="logo_img">
                <img src="./img/logo5.svg" alt="" />
            </div>
            <div class="logo_img">
                <img src="./img/logo6.svg" alt="" />
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer__copyright">
            <div>© Copyright 2019 kmg-oms.kz - all rights reserved</div>
            <div>Разработчик Kazinsys</div>
        </div>
    </div>
</footer>
<script src="/jquery-3.6.0.min.js"></script>
<script src="./OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
></script>
<script src="/script.js"></script>
</body>
</html>