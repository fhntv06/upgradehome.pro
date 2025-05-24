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

get_header();
?>
    <main class="main-page">
        <!-- HERO -->
        <div class="hero-bg">
            <div class="hero-bg-1"></div>
            <div class="hero-bg-2"></div>
        </div>
        <section class="hero">
            <div class="wrapper">
                <div class="hero__content">
                    <p class="hero-prefix medium">Умный дом</p>
                    <h1 class="font-unbounded font-medium h1-large">Умные решения для&nbsp;вашего дома</h1>
                    <div class="hero-tabs">
                        <p class="underline active">Подобрать решение</p>
                        <p class="underline">Задать вопрос</p>
                    </div>
                    <div class="hero__arrow-down">
                        <svg xmlns="http://www.w3.org/2000/svg" width="135" height="40" viewBox="0 0 135 40" fill="none">
                            <path d="M134 1L77.6177 34.0663C71.3701 37.7303 63.6299 37.7303 57.3823 34.0663L1 1" stroke="#767676" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAIN CARDS -->
        <section>
            <div class="wrapper">
                <div class="main-cards">
                    <div class="card">
                        <div class="card__bg" style="background-image: url('/wp-content/themes/upgradehome/images/main-card_1.png')"></div>
                        <h3 class="title font-unbounded font-medium">Мы создаём</h3>
                        <p class="description">Мы создаём современные, безопасные и комфортные пространства, интегрируя передовые технологии в каждый дом и квартиру.</p>
                    </div>
                    <div class="card">
                        <div class="card__bg" style="background-image: url('/wp-content/themes/upgradehome/images/main-card_2.png')"></div>
                        <h3 class="title font-unbounded font-medium">Наша цель</h3>
                        <p class="description">Сделать ваш дом умнее, тише и безопаснее, чтобы вы могли наслаждаться жизнью без лишних забот.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- GREEN LINES -->
        <div class="green-lines">
            <div class="green-lines__bg"></div>
            <div class="green-lines__points">
                <div class="green-lines__point smart-house">
                    <p class="big">Умный дом</p>
                </div>
                <div class="green-lines__point video-surveillance">
                    <p class="big">Видеонаблюдение</p>
                </div>
                <div class="green-lines__point humidification">
                    <p class="big">Увлажнение</p>
                </div>
                <div class="green-lines__point multimedia-system">
                    <p class="big">Мультимедийная система</p>
                </div>
                <div class="green-lines__point fire-safety">
                    <p class="big">Пожарная безопасность</p>
                </div>
                <div class="green-lines__point ventilation">
                    <p class="big">Вентиляция</p>
                </div>
                <div class="green-lines__point noise-insulation">
                    <p class="big">Шумоизоляция</p>
                </div>
            </div>
        </div>

        <!--   SIGNIFICANCE   -->
        <section class="significance">
            <div class="wrapper">
                <h2 class="title">Ценности UpGrade Home</h2>
                <div class="significance-cards">
                    <div class="card">
                        <div class="card__bg integrated-approach"></div>
                        <div class="tag">Комплексный подход</div>
                        <p class="large">Предлагаем полный спектр решений для комфорта, безопасности и уюта</p>
                    </div>
                    <div class="card">
                        <div class="card__bg innovation"></div>
                        <div class="tag">Инновации</div>
                        <p class="large">Внедряем только современные и проверенные технологии</p>
                    </div>
                    <div class="card">
                        <div class="card__bg reliability"></div>
                        <div class="tag">Надёжность</div>
                        <p class="large">Гарантируем качество и долговечность всех установленных систем</p>
                    </div>
                    <div class="card">
                        <div class="card__bg safety"></div>
                        <div class="tag">Безопасность</div>
                        <p class="large">Заботимся о вашей защите и спокойствии</p>
                    </div>
                    <div class="card">
                        <div class="card__bg personalization"></div>
                        <div class="tag">Персонализация</div>
                        <p class="large">Учитываем индивидуальные потребности каждого клиента</p>
                    </div>
                    <div class="card">
                        <div class="card__bg professionalism"></div>
                        <div class="tag">Профессионализм</div>
                        <p class="large">Работаем с опытными специалистами и соблюдаем высокие стандарты сервиса</p>
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
    </main>
<?php
get_footer();
