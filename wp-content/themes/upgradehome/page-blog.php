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
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Текущая страница

                    $args = array(
                        'post_type'      => 'post', // Тип записей (посты)
                        'posts_per_page' => 6,      // 6 постов на страницу
                        'paged'          => $paged, // Пагинация
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            // Данные поста доступны здесь!
                            $post_id = get_the_ID(); // ID поста
                            $title = get_the_title(); // Заголовок
                            $content = get_the_content(); // Контент
                            $excerpt = get_the_excerpt(); // Краткое описание
                            $permalink = get_permalink(); // Ссылка на пост
                            $thumbnail = get_the_post_thumbnail_url(); // URL изображения
                            $date = get_the_date('d.m.Y'); // дата
                            $views = pvc_post_views($post_id, false); // Просмотры (если есть плагин)
                    ?>
                       <a class="card" href="<?= $permalink ?>">
                            <div class="card__image">
                                <img
                                    src="<?= $thumbnail ?>"
                                    alt="<?= $title ?>"
                                    title="<?= $title ?>"
                                />
                                <div class="card-info">
                                    <div class="card-info__item" title="Лайки">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                        <p class="font-unbounded extra-medium">128</p>
                                    </div>
                                    <div class="card-info__item" title="Просмотры">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 6a9.77 9.77 0 0 0-9 6 9.77 9.77 0 0 0 18 0 9.77 9.77 0 0 0-9-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z" />
                                        </svg>
                                        <?php if (function_exists('pvc_post_views')) echo $views ?>
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
                                <p class="small font-semibold card-details__date">
                                    <?= $date ?>
                                </p>
                                <p class="big">
                                    <?= $title ?>
                                </p>
                                <div class="card-details__description">
                                    <?= $content ?>
                                </div>
                            </div>
                        </a>
                    <?php
                        }
                    }
                        wp_reset_postdata();
                    ?>

                    </div>
                    <div class="blog-pagination">
                    <?php
                        $big = 999999999; // Уникальное число для замены
                        // Стандартная пагинация (но ограничим её 4 кнопками)
                        $paginate_args = array(
                            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format'    => '?paged=%#%',
                            'current'   => max(1, get_query_var('paged')),
                            'total'     => $query->max_num_pages,
                            'prev_next' => false,
                            'end_size'  => 1,
                            'mid_size'  => 2, // 2 кнопки вокруг текущей (итого 4)
                        );

                        $pagination = paginate_links($paginate_args);

                        // Если есть пагинация, выводим её + кнопку "Дальше"
                        if ($pagination) :
                            $pagination = '<div class="pagination">' . $pagination;

                            // Добавляем кнопку "..." (переход на +1 страницу)
                            if (get_query_var('paged') < $query->max_num_pages && get_query_var('paged') > 4) :
                                $next_page = get_query_var('paged') + 1;
                                $pagination .= '<a href="' . esc_url(get_pagenum_link($next_page)) . '" class="page-numbers">...</a>';
                            endif;

                            $pagination .= '</div>';
                        endif;

                        echo $pagination;
                    ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer('inside');
