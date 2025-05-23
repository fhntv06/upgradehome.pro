<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package upgradehome
 */


/*
Theme Name: upgradehome
Theme URI:
Description: Theme upgradehome
Author: KArtem
Author URI:
Version: 1.0.0
*/

get_header('inside');
?>
    <main class="blog-page">
        <!-- NAVIGATION  -->
        <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb(
                    '<section><div class="wrapper"><nav class="navigation">',
                    '</nav></div></section>'
                );
            }
        ?>

        <!-- BLOG CARDS -->
        <section>
            <div class="wrapper">
                <div class="blog-cards">
                    <div class="cards">
                        <a class="card" href="#">
                            <div class="card__image">
                                <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/clever-house.png')"></div>
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
                                <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/clever-house.png')"></div>
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
                                <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/clever-house.png')"></div>
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
                                <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/clever-house.png')"></div>
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
                                <div class="card__image-bg" style="background-image: url('/wp-content/themes/upgradehome/images/clever-house.png')"></div>
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
                    <div class="blog-pagination">
                        <div class="pagination">
                            <p class="font-unbounded medium"><a class="pagination-button active" href="#">1</a></p>
                            <p class="font-unbounded medium"><a class="pagination-button" href="#">2</a></p>
                            <p class="font-unbounded medium"><a class="pagination-button" href="#">3</a></p>
                            <p class="font-unbounded medium"><a class="pagination-button" href="#">4</a></p>
                            <p class="font-unbounded medium"><a class="pagination-button" href="#">...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer('inside');
