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
    <main class="about-page">
        <!-- NAVIGATION  -->
        <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb(
                    '<section><div class="wrapper"><nav class="navigation">',
                    '</nav></div></section>'
                );
            }
        ?>

        <!-- COMPANY  -->
        <section class="text-container">
            <div class="wrapper">
                <h2 class="text-container__title">О компании</h2>
                <div class="text-container__columns">
                    <div class="text-container__left-column">
                        <p class="gray-light">С развитием технологий каждое новое открытие становится значительным шагом вперёд. Современные решения находят применение в различных сферах жизни, улучшая качество и ускоряя процессы. Важно быть в курсе тенденций, чтобы не упустить новые возможности.</p>
                    </div>
                    <div class="text-container__right-column">
                        <blockquote class="text-container__blockquote">
                            <p class="gray-light">«Никогда не стойте на месте. Идите вперёд, даже если путь кажется трудным. Главное — не останавливаться и верить в успех.»</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!--  SIGNIFICANCE CARDS  -->
        <section>
            <div class="wrapper">
                <div class="significance-cards significance-cards--column-three">
                    <div class="card">
                        <div class="card__bg integrated-approach"></div>
                        <div class="tag">Преимущество</div>
                        <p class="large">Предлагаем полный спектр решений для комфорта, безопасности и уюта</p>
                    </div>
                    <div class="card">
                        <div class="card__bg innovation"></div>
                        <div class="tag">Преимущество</div>
                        <p class="large">Внедряем только современные и проверенные технологии</p>
                    </div>
                    <div class="card">
                        <div class="card__bg safety"></div>
                        <div class="tag">Преимущество</div>
                        <p class="large">Заботимся о вашей защите и спокойствии</p>
                    </div>
                    <div class="card">
                        <div class="card__bg personalization"></div>
                        <div class="tag">Преимущество</div>
                        <p class="large">Учитываем индивидуальные потребности каждого клиента</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- HISTORY  -->
        <section class="text-container">
            <div class="wrapper">
                <h2 class="text-container__title">История компании</h2>
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

        <!-- MISSION  -->
        <section class="text-container">
            <div class="wrapper">
                <h2 class="text-container__title">Миссия компании</h2>
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

        <!--   TEAM   -->
        <section class="team">
            <div class="team-bg"></div>
            <div class="wrapper">
                <h2 class="title">Наша команда</h2>
                <div class="team-cards wrapper">
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/team-card_1.jpg" alt="Генеральный директор">
                        <div class="team-personal">
                            <p class="big">Дарья Олеговна</p>
                            <p class="medium gray-dark">Генеральный директор</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/team-card_2.jpg" alt="Исполнительный директор">
                        <div class="team-personal">
                            <p class="big">Анна Александровна</p>
                            <p class="medium gray-dark">Исполнительный директор</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/team-card_3.jpg" alt="Контент-маркетолог">
                        <div class="team-personal">
                            <p class="big">София Гузеева</p>
                            <p class="medium gray-dark">Контент-маркетолог</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/team-card_4.jpg" alt="IT-разработчик">
                        <div class="team-personal">
                            <p class="big">Роман Фамилия</p>
                            <p class="medium gray-dark">IT-разработчик</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/team-card_5.jpg" alt="Руководитель отдела маркетинга">
                        <div class="team-personal">
                            <p class="big">Гузель Бредихина</p>
                            <p class="medium gray-dark">Руководитель отдела маркетинга</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/wp-content/themes/upgradehome/images/team-card_6.jpg" alt="Руководитель отдела продаж">
                        <div class="team-personal">
                            <p class="big">Павел Жигулин</p>
                            <p class="medium gray-dark">Руководитель отдела продаж</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--   TEXT CONTAINER WITH PHOTO   -->
        <section class="text-container-with-photo">
            <div class="text-container-with-photo__columns wrapper">
                <div class="text-container-with-photo__column">
                    <p class="gray-light">С развитием технологий каждое новое открытие становится значительным шагом вперёд. Современные решения находят применение в различных сферах жизни, улучшая качество и ускоряя процессы. Важно быть в курсе тенденций, чтобы не упустить новые возможности.</p>
                    <blockquote>
                        <p class="gray-light">Никогда не стойте на месте. Идите вперёд, даже если путь кажется трудным. Главное — не останавливаться и верить в успех.</p>
                    </blockquote>
                    <p class="gray-light">Сотрудничество и обмен опытом становится ключевыми факторами в успешной реализации проектов. Совместные усилия ведут к более быстрым и эффективным решениям, открывая новые горизонты для развития. Постоянное обучение и адаптация к изменениям — залог успешного будущего.</p>
                </div>
                <div class="text-container-with-photo__column">
                    <div class="photo" style="background-image: url('/wp-content/themes/upgradehome/images/text-container-with-photo_1.jpg')">
                        <div class="signature">
                            <p class="extra-medium">Подпись к фото</p>
                        </div>
                    </div>
                    <div class="photo" style="background-image: url('/wp-content/themes/upgradehome/images/text-container-with-photo_2.jpg')">
                        <div class="signature">
                            <p class="extra-medium">Подпись к фото</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer('inside');
