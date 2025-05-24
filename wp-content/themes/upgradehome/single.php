<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package upgradehome
 */

get_header('inside');
?>

    <main class="article-page">
        <!-- NAVIGATION  -->
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb(
                '<section><div class="wrapper"><nav class="navigation">',
                '</nav></div></section>'
            );
        }
        ?>

        <!-- ARTICLE  -->
        <section class="article">
            <div class="wrapper">
                <h1 class="font-unbounded font-medium">Название статьи</h1>

                <!-- THUMBNAIL  -->
                <div class="thumbnail" style="background-image: url('/wp-content/themes/upgradehome/images/thubnail.jpg')">
                    <div class="thumbnail__tags">
                        <div class="thumbnail__tag">камеры видеонаблюдения</div>
                        <div class="thumbnail__tag">советы</div>
                        <div class="thumbnail__tag">лайфхаки</div>
                        <div class="thumbnail__tag">невероятное</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DESCRIPTION ARTICLE H2  -->
        <section class="text-container">
            <div class="wrapper">
                <h2 class="text-container__title font-unbounded font-medium">Заголовок H2</h2>
                <div class="text-container__columns">
                    <div class="text-container__left-column">
                        <p class="gray-light">С развитием технологий каждое новое открытие становится значительным шагом вперёд. Современные решения находят применение в различных сферах жизни, улучшая качество и ускоряя процессы. Важно быть в курсе тенденций, чтобы не упустить новые возможности.</p>
                        <p class="gray-light">Сотрудничество и обмен опытом становится ключевыми факторами в успешной реализации проектов. Совместные усилия ведут к более быстрым и эффективным решениям, открывая новые горизонты для развития. Постоянное обучение и адаптация к изменениям — залог успешного будущего.</p>
                    </div>
                    <div class="text-container__right-column">
                        <blockquote class="text-container__blockquote">
                            <p class="gray-light">«Никогда не стойте на месте. Идите вперёд, даже если путь кажется трудным. Главное — не останавливаться и верить в успех.»</p>
                        </blockquote>
                        <ol>
                            <li>Чёткое изображение</li>
                            <li>Малый размер</li>
                            <li>Цена</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- DESCRIPTION ARTICLE H3  -->
        <section class="text-container">
            <div class="wrapper">
                <h3 class="text-container__title font-medium">Заголовок H3</h3>
                <div class="text-container__columns">
                    <div class="text-container__left-column">
                        <p class="gray-light">Сотрудничество и обмен опытом становится ключевыми факторами в успешной реализации проектов. Совместные усилия ведут к более быстрым и эффективным решениям, открывая новые горизонты для развития. Постоянное обучение и адаптация к изменениям — залог успешного будущего.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- DESCRIPTION ARTICLE H4  -->
        <section class="text-container">
            <div class="wrapper">
                <h4 class="text-container__title font-medium">Заголовок H4</h4>
                <div class="text-container__columns">
                    <div class="text-container__left-column">
                        <p class="gray-light">Сотрудничество и обмен опытом становится ключевыми факторами.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BANNER -->
        <section class="banner">
            <div class="banner-bg">
                <div class="banner-bg__figure-1" style="background-image: url('/wp-content/themes/upgradehome/images/banner_figure_1.png')"></div>
                <div class="banner-bg__figure-2" style="background-image: url('/wp-content/themes/upgradehome/images/banner_figure_2.png')"></div>
                <div class="banner-bg__figure-3" style="background-image: url('/wp-content/themes/upgradehome/images/banner_figure_3.png')"></div>
            </div>
            <div class="wrapper">
                <div class="banner__content">
                    <div class="banner__content__header">
                        <p class="h2 font-unbounded font-medium color-black">Элемент конверсии</p>
                        <p class="banner__description big color-black font-medium">Важная информация всегда будет актуальна в рамках современных веяний</p>
                        <div class="banner__steps">
                            <p class="banner__step">1. Первый шаг</p>
                            <p class="banner__step">2. Второй шаг</p>
                            <p class="banner__step">3. Третий шаг</p>
                        </div>
                    </div>
                    <p class="medium"><a class="source underline active font-medium" href="/">Обратный звонок</a></p>
                </div>
            </div>
        </section>

        <!--   TEXT CONTAINER WITH PHOTO   -->
        <section class="text-container-with-photo">
            <div class="wrapper">
                <div class="text-container-with-photo__columns">
                    <div class="text-container-with-photo__column text-container-with-photo__column-3">
                        <div class="photo" style="background-image: url('/wp-content/themes/upgradehome/images/text-container-with-photo_1.jpg')">
                            <div class="signature">
                                <p class="extra-medium">Подпись к фото</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-container-with-photo__column text-container-with-photo__column-3">
                        <div class="photo" style="background-image: url('/wp-content/themes/upgradehome/images/text-container-with-photo_2.jpg')">
                            <div class="signature">
                                <p class="extra-medium">Подпись к фото</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-container-with-photo__column text-container-with-photo__column-3">
                        <div class="photo" style="background-image: url('/wp-content/themes/upgradehome/images/clever-house.png')">
                            <div class="signature">
                                <p class="extra-medium">Подпись к фото</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--   VIDEO CONTAINER   -->
        <section class="video-container">
            <div class="wrapper">
                <video id="player" playsinline controls data-poster="/wp-content/themes/upgradehome/images/thubnail.jpg">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                </video>
                <p class="extra-medium video-container__description">Описание к видео: сотрудничество и обмен опытом становится ключевыми факторами.</p>
            </div>
        </section>

        <!-- BLOG CARDS -->
        <section class="blog-cards">
            <div class="wrapper">
                <h2 class="blog-cards__title font-unbounded font-regular">Похожие публикации</h2>
                <div class="cards">
                    <a class="card" href="#">
                        <div class="card__image">
                            <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/blog-card_4.jpg')"></div>
                            <div class="card-info">
                                <div class="card-info__item" title="Лайки">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                        />
                                    </svg>
                                    <p class="font-unbounded extra-medium">128</p>
                                </div>
                                <div class="card-info__item" title="Просмотры">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 6a9.77 9.77 0 0 0-9 6 9.77 9.77 0 0 0 18 0 9.77 9.77 0 0 0-9-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"
                                        />
                                    </svg>
                                    <p class="font-unbounded extra-medium">3.4k</p>
                                </div>
                                <div class="card-info__item" title="Длительность">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 20a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm.5-13h-1v6l5.25 3.15.75-1.23-4.5-2.67z" />
                                    </svg>
                                    <p class="font-unbounded extra-medium">11 минут</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-details">
                            <p class="small font-semibold card-details__date">24.05.25</p>
                            <p class="big">Заголовок</p>
                            <p class="medium">С развитием технологий каждое новое открытие становится значительным шагом вперёд.</p>
                        </div>
                    </a>
                    <a class="card" href="#">
                        <div class="card__image">
                            <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/blog-card_5.jpg')"></div>
                            <div class="card-info">
                                <div class="card-info__item" title="Лайки">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                        />
                                    </svg>
                                    <p class="font-unbounded extra-medium">128</p>
                                </div>
                                <div class="card-info__item" title="Просмотры">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 6a9.77 9.77 0 0 0-9 6 9.77 9.77 0 0 0 18 0 9.77 9.77 0 0 0-9-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"
                                        />
                                    </svg>
                                    <p class="font-unbounded extra-medium">3.4k</p>
                                </div>
                                <div class="card-info__item" title="Длительность">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 20a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm.5-13h-1v6l5.25 3.15.75-1.23-4.5-2.67z" />
                                    </svg>
                                    <p class="font-unbounded extra-medium">11 минут</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-details">
                            <p class="small font-semibold card-details__date">24.05.25</p>
                            <p class="big">Заголовок</p>
                            <p class="medium">С развитием технологий каждое новое открытие становится значительным шагом вперёд.</p>
                        </div>
                    </a>
                    <a class="card" href="#">
                        <div class="card__image">
                            <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/blog-card_6.jpg')"></div>
                            <div class="card-info">
                                <div class="card-info__item" title="Лайки">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                        />
                                    </svg>
                                    <p class="font-unbounded extra-medium">128</p>
                                </div>
                                <div class="card-info__item" title="Просмотры">
                                    <svg viewBox="0 0 24 24">
                                        <path
                                            d="M12 6a9.77 9.77 0 0 0-9 6 9.77 9.77 0 0 0 18 0 9.77 9.77 0 0 0-9-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"
                                        />
                                    </svg>
                                    <p class="font-unbounded extra-medium">3.4k</p>
                                </div>
                                <div class="card-info__item" title="Длительность">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 20a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm.5-13h-1v6l5.25 3.15.75-1.23-4.5-2.67z" />
                                    </svg>
                                    <p class="font-unbounded extra-medium">11 минут</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-details">
                            <p class="small font-semibold card-details__date">24.05.25</p>
                            <p class="big">Заголовок</p>
                            <p class="medium">С развитием технологий каждое новое открытие становится значительным шагом вперёд.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer('inside');
