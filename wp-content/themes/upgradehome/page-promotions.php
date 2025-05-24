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
    <main class="promotions-page">
        <!-- NAVIGATION  -->
        <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb(
                    '<section><div class="wrapper"><nav class="navigation">',
                    '</nav></div></section>'
                );
            }
        ?>
        <section>
            <div class="wrapper">
                <div class="promotion-cards">
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/promotion-card_1.jpg" alt="promotion">
                        <p class="font-unbounded font-regular extra-big">Название статьи</p>
                        <p class="medium">Предлагаем полный спектр решений для комфорта, безопасности и уюта</p>
                        <p class="extra-medium font-regular"><a class="source underline active w-full" href="/">Подробнее</a></p>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/promotion-card_1.jpg" alt="promotion">
                        <p class="font-unbounded font-regular extra-big">Название статьи</p>
                        <p class="medium">Предлагаем полный спектр решений для комфорта, безопасности и уюта</p>
                        <p class="extra-medium font-regular"><a class="source underline active w-full" href="/">Подробнее</a></p>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/promotion-card_1.jpg" alt="promotion">
                        <p class="font-unbounded font-regular extra-big">Название статьи</p>
                        <p class="medium">Предлагаем полный спектр решений для комфорта, безопасности и уюта</p>
                        <p class="extra-medium font-regular"><a class="source underline active w-full" href="/">Подробнее</a></p>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/promotion-card_1.jpg" alt="promotion">
                        <p class="font-unbounded font-regular extra-big">Название статьи</p>
                        <p class="medium">Предлагаем полный спектр решений для комфорта, безопасности и уюта</p>
                        <p class="extra-medium font-regular"><a class="source underline active w-full" href="/">Подробнее</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!--   TEXT CONTAINER WITH PHOTO   -->
        <section class="text-container-with-photo">
            <div class="wrapper">
                <div class="text-container-with-photo__columns">
                <div class="text-container-with-photo__column text-container-with-photo__column-2">
                    <p class="large title font-regular">Описание политики скидок и акций в компании</p>
                    <p class="gray-light">С развитием технологий каждое новое открытие становится значительным шагом вперёд. Современные решения находят применение в различных сферах жизни, улучшая качество и ускоряя процессы. Важно быть в курсе тенденций, чтобы не упустить новые возможности.</p>
                    <blockquote>
                        <p class="gray-light">Никогда не стойте на месте. Идите вперёд, даже если путь кажется трудным. Главное — не останавливаться и верить в успех.</p>
                    </blockquote>
                </div>
                <div class="text-container-with-photo__column text-container-with-photo__column-2">
                    <div class="text-container-with-photo--one photo" style="background-image: url('/wp-content/themes/upgradehome/images/text-container-with-photo_2.jpg')">
                        <div class="signature">
                            <p class="extra-medium">Подпись к фото</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
<?php
get_footer('inside');
