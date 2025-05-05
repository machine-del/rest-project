<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ресторан «Attache»</title>
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/main.js" defer></script>
</head>

<body>
    <header>
        <div class="header__container">
            <div class="header__logo">
                <a href="index.php">
                    <img src="./images/logo/attache_logo_colour 1.png" alt="logo">
                </a>
            </div>
            <div class="header__navigation">
                <nav>
                    <ul>
                        <li><a href="#">Меню</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Банкеты</a></li>
                        <li><a href="#">О ресторане</a></li>
                        <li><a href="#">События</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#" class="active-lang">RU</a>/<a href="#">EN</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="about">
            <div class="about__container">
                <h1 class="about__title">Ресторан «Attache»: изысканная <br> европейская кухня и авторские блюда</h1>
                <p class="about__description">
                    Ресторан «Attache» — атмосферное пространство европейской гастрономии, <br>
                    где изысканные вина и авторские блюда превращают ужин в настоящее <br>
                    событие. Здесь каждый найдёт вкус, в который влюбится
                </p>
                <div class="about__actions">
                    <a href="#" class="about__button about__button_primary">Забронировать стол</a>
                    <a href="#" class="about__button about__button_outline">Заказать доставку</a>
                </div>
            </div>
        </section>
        <section class="restaurant-about">
            <div class="restaurant-about__box">
                <div class="restaurant-about__container">
                    <div class="restaurant-about__main">
                        <h2 class="restaurant-about__title">О ресторане</h2>
                        <p class="restaurant-about__description">
                            Добро пожаловать в ресторан «Attache» — место, <br>
                            где гастрономические традиции встречаются с <br> современными кулинарными решениями.
                            <br>Узнайте больше о нашем пути, философии и команде, <br>
                            создающей для вас уникальные блюда и <br> неповторимую атмосферу
                        </p>
                    </div>

                    <div class="restaurant-about__features">
                        <div class="restaurant-about__feature">
                            <h3 class="restaurant-about__feature-title">Тип кухни</h3>
                            <p class="restaurant-about__feature-value">Европейская</p>
                        </div>
                        <div class="restaurant-about__feature">
                            <h3 class="restaurant-about__feature-title">Вместительность</h3>
                            <p class="restaurant-about__feature-value">До 75 человек</p>
                        </div>
                        <div class="restaurant-about__feature">
                            <h3 class="restaurant-about__feature-title">Контакт</h3>
                            <p class="restaurant-about__feature-value">+7 (951) 643-43-88</p>
                        </div>
                    </div>
                </div>

                <div class="restaurant-about__slider">
                    <div class="restaurant-about__slider-container">
                        <img class="restaurant-about__slide" src="./images/background/unsplash_sScNrKruEPs.png" alt="Интерьер ресторана">
                        <img class="restaurant-about__slide" src="./images/background/unsplash_sScNrKruEPs.png" alt="Интерьер ресторана">
                        <img class="restaurant-about__slide" src="./images/background/unsplash_sScNrKruEPs.png" alt="Интерьер ресторана">
                        <img class="restaurant-about__slide" src="./images/background/unsplash_sScNrKruEPs.png" alt="Интерьер ресторана">

                        <div class="restaurant-about__pagination">
                            <span class="restaurant-about__dot"></span>
                            <span class="restaurant-about__dot"></span>
                            <span class="restaurant-about__dot"></span>
                            <span class="restaurant-about__dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-section">
            <div class="menu">
                <div class="menu__container">
                    <div class="menu__content">
                        <div class="menu__gallery">
                            <div class="menu__image-wrapper">
                                <img class="menu__image-main" src="./images/background/unsplash_zdXDWA6Py2k.png" alt="Блюда ресторана">
                                <img class="menu__image-overlay" src="./images/background/unsplash_TVzSWDntlOM.png" alt="Дополнительное изображение">
                            </div>
                        </div>
                        <div class="menu__info">
                            <h2 class="menu__heading">Меню</h2>
                            <p class="menu__text">
                                Наше меню — это симфония вкусов, где каждая деталь <br>
                                продумана до совершенства. Мы приглашаем вас <br>
                                насладиться изысканными блюдами средиземноморской <br>
                                кухни, которые создаются с любовью и страстью к <br>
                                кулинарному искусству
                            </p>
                            <div class="about__actions">
                                <a href="#" class="about__button about__button_primary">Посмотреть меню</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dishes-cards">
                    <div class="dishes-cards__slider" id="dishesSlider">
                        <div class="dishes-card">
                            <div class="dishes-card__image">
                                <img src="./images/background/IMG_5412 2.png" alt="#">
                            </div>
                            <h3 class="dishes-card__title">Борщ с салом и деревенской <br> сметаной</h3>
                        </div>
                        <div class="dishes-card">
                            <div class="dishes-card__image">
                                <img src="./images/background/NXtxisvSh-Y 2.png" alt="#">
                            </div>
                            <h3 class="dishes-card__title">Говяжьи щечки Качо с <br> картофельным пюре</h3>
                        </div>
                        <div class="dishes-card">
                            <div class="dishes-card__image">
                                <img src="./images/background/p1l2tNVoV1g 1.png" alt="#">
                            </div>
                            <h3 class="dishes-card__title">Брускетта с говядиной и Грана <br> падано</h3>
                        </div>
                        <div class="dishes-card">
                            <div class="dishes-card__image">
                                <img src="./images/background/__3___2 1.png" alt="#">
                            </div>
                            <h3 class="dishes-card__title">Брускетта с красной рыбой и <br> Крем-Фета</h3>
                        </div>
                    </div>
                    <div class="dishes-cards__controls">
                        <a href="#" class="dishes-cards__button dishes-cards__button_dark">Посмотреть все меню</a>
                        <a href="#" class="dishes-cards__button dishes-cards__button_outline">Заказать доставку</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="reservation">
            <div class="reservation__container">
                <div class="reservation__form">
                    <h3 class="reservation__form-title">Забронировать стол</h3>
                    <form class="booking-form" action="index.php" method="post">
                        <div class="booking-form__group">
                            <label class="booking-form__label" for="name">Имя</label>
                            <input class="booking-form__input" type="text" id="name" name="name" required>
                        </div>
                        <div class="booking-form__group">
                            <label class="booking-form__label" for="phone">Телефон</label>
                            <input class="booking-form__input" type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="booking-form__group">
                            <label class="booking-form__label" for="date">Дата</label>
                            <input class="booking-form__input" type="date" id="date" name="date" required>
                        </div>
                        <div class="booking-form__group">
                            <label class="booking-form__label" for="time">Время</label>
                            <input class="booking-form__input" type="time" id="time" name="time" required>
                        </div>
                        <div class="booking-form__group">
                            <label class="booking-form__label" for="guests">Гости</label>
                            <input class="booking-form__input" type="number" id="guests" name="guests" min="1" required>
                        </div>
                        <button class="booking-form__submit" type="submit">Забронировать стол</button>
                    </form>
                </div>

                <div class="reservation__about">
                    <h2 class="reservation__title">Забронируйте стол в ресторане «Attache»</h2>
                    <p class="reservation__text">
                        Наслаждайтесь изысканными блюдами и непревзойденным обслуживанием
                        в уютной атмосфере. Мы с нетерпением ждем возможности создать
                        для вас незабываемый вечер.
                    </p>
                    <div class="reservation__image-wrapper">
                        <img class="reservation__image" src="./images/background/unsplash_CPMZguYURMw.png" alt="#">
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>