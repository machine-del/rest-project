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
    <?php include './header.php'; ?>
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
                        <div class="booking-form__row">
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="name">Имя</label>
                                <input class="booking-form__input" type="text" id="name" name="name" required>
                            </div>
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="phone">Телефон</label>
                                <input class="booking-form__input" type="tel" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="booking-form__row">
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="date">Дата</label>
                                <input class="booking-form__input" type="date" id="date" value="<?= date("Y-m-d") ?>" name="date" required>
                            </div>
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="time">Время</label>
                                <input class="booking-form__input" type="time" id="time" name="time" required>
                            </div>
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="guests">Гости</label>
                                <input class="booking-form__input" type="number" id="guests" value="1" name="guests" min="1" required>
                            </div>
                        </div>

                        <input class="booking-form__submit" type="submit" value="Забронировать стол">
                    </form>
                </div>

                <div class="reservation__about">
                    <p class="reservation__text">
                        Забронируйте стол в ресторане «Attache» <br>
                        и наслаждайтесь изысканными блюдами <br>
                        и непревзойденным обслуживанием в уютной <br> атмосфере.
                        Мы с нетерпением ждем возможности <br> создать для вас незабываемый вечер
                    </p>
                    <div class="reservation__image-wrapper">
                        <img class="reservation__image" src="./images/background/unsplash_CPMZguYURMw.png" alt="#">
                    </div>
                </div>
            </div>
        </section>
        <section class="delivery">
            <div class="delivery__container">
                <div class="delivery__content">
                    <div class="delivery__main">
                        <div class="delivery__info">
                            <h2 class="delivery__title">Доставка</h2>
                            <p class="delivery__description">
                                Доставка от ресторана «Attache» — это возможность <br>
                                насладиться любимыми блюдами там,
                                где вам <br> удобно. Мы бережно упакуем каждый заказ, чтобы <br> вкус, аромат и настроение
                                остались безупречными
                            </p>
                            <div class="delivery__controls">
                                <a href="#" class="about__button about__button_primary">Заказать онлайн</a>
                                <a href="#" class="about__button about__button_outline">Заказать по телефону</a>
                            </div>
                        </div>
                        <div class="delivery__gallery">
                            <div class="delivery__image-wrapper">
                                <img class="delivery__image-main" src="./images/background/unsplash_XNNurImW1xM.png" alt="#">
                                <img class="delivery__image-secondary" src="./images/background/unsplash_1JSUX4iB0YE.png" alt="#">
                            </div>
                        </div>
                    </div>
                    <div class="delivery-about__features">
                        <div class="delivery-about__feature">
                            <h3 class="delivery-about__feature-title">Время работы</h3>
                            <p class="delivery-about__feature-value">С 10:00 до 22:00</p>
                        </div>
                        <div class="delivery-about__feature">
                            <h3 class="delivery-about__feature-title">Оплата</h3>
                            <p class="delivery-about__feature-value">Наличными и безналичный расчет с <br> курьером, а также оплата онлайн</p>
                        </div>
                        <div class="delivery-about__feature">
                            <h3 class="delivery-about__feature-title">Бесплатная доставка</h3>
                            <p class="delivery-about__feature-value">в радиусе 10км от ресторана при <br> заказе от 2500 рублей</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="order">
            <div class="order__container">
                <div class="order__image" aria-hidden="true">
                    <img src="./images/background/unsplash_CPMZguYURMw (1).png" alt="">
                </div>
                <div class="order__form">
                    <h3 class="order__form-title">Закажите банкет</h3>
                    <div class="order__form-description">
                        Планируете особенное событие? Закажите банкет в <br>
                        ресторане «Attache» — мы создадим атмосферу, в <br>
                        которой каждый момент станет запоминающимся. <br>
                        Изысканное меню, стильный интерьер и забота о <br>
                        деталях — всё для вашего идеального праздника
                    </div>
                    <form class="booking-form" action="index.php" method="post">
                        <div class="booking-form__row">
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="name">Имя</label>
                                <input class="booking-form__input" type="text" id="name" name="name" required>
                            </div>
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="phone">Телефон</label>
                                <input class="booking-form__input" type="tel" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="booking-form__row">
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="date">Дата</label>
                                <input class="booking-form__input" type="date" id="date" name="date" value="<?= date('Y-m-d') ?>" required>
                            </div>
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="time">Время</label>
                                <input class="booking-form__input" type="time" id="time" name="time" required>
                            </div>
                            <div class="booking-form__group">
                                <label class="booking-form__label" for="guests">Гости</label>
                                <input class="booking-form__input" type="number" id="guests" name="guests" value="1" min="1" required>
                            </div>
                        </div>

                        <input class="booking-form__submit" type="submit" value="Заказать банкет">
                    </form>
                </div>
            </div>
        </section>
        <section class="events">
            <div class="events__container">
                <div class="events__media">
                    <h2 class="events__heading">Событие</h2>
                    <div class="events__image">
                        <img src="./images/background/0x6HOggkuJ0 1.png" alt="#">
                    </div>
                </div>

                <div class="events__content">
                    <div class="events__highlight">
                        <h3 class="events__highlight-title">Десерт недели</h3>
                        <div class="events__slider-controls">
                            <button class="events__slider-button events__slider-button_prev">&lt;</button>
                            <div class="events__slider-count"><span class="active-number">1</span>/9</div>
                            <button class="events__slider-button events__slider-button_next">&gt;</button>
                        </div>
                    </div>

                    <div class="events__description">
                        <p>
                            Французский тост с карамелизированным инжиром и <br> кремом из маскарпоне.
                        </p>
                        <p>
                            Воздушный бриош, обжаренный в сливочной заливке с <br>
                            ванилью и корицей, подаётся с тёплым инжиром в <br>
                            карамельном соусе, нежным кремом из маскарпоне и <br>
                            штрихом мёда. Идеальный баланс сладости, текстуры и <br>
                            изысканности
                        </p>
                    </div>

                    <div class="events__action">
                        <a href="#" class="events__button">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include './footer.php'; ?>
</body>

</html>