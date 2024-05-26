<?php
get_header();
// Template Name: trainer
?>


<main>
    <section class="trainer-page">
        <div class="container">
            <h1 class="trainer-title"><?php the_title(); ?></h1>
            <p class="trainer-p"><?php echo get_post_meta(get_the_id(), 'descr', true); ?></p>
            <ul class="trainer-list">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  => '',
                    'post_type'   => 'trainers',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                ?>
                    <li class="trainer-card">
                        <img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="" class="trainer-img">
                        <div class="trainer-text">

                            <h3 class="trainer-name"><?php the_title(); ?></h3>
                            <p class=" trainer-descr"><?php the_content(); ?></p>
                        </div>
                    </li>
                <?php
                }

                wp_reset_postdata(); // сброс
                ?>



            </ul>
        </div>
    </section>
</main>

<?php
get_footer();
?>