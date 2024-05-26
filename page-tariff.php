<?php
get_header();
// Template Name: tariff
?>


<main>
    <section class="tariff">
        <div class="container">
            <h1 class="tariff-title"><?php the_title(); ?></h1>
            <p class="tariff-p"><?php echo get_post_meta(get_the_id(), 'descr', true) ?></p>

            <ul class="tariff-list">


                <?php
                // параметры по умолчанию
                $my_posts = get_posts(array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  => '',
                    'post_type'   => 'tarif',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                ?>
                    <li class="tarif-card">
                        <div class="tarif-card-up">
                            <h3 class="tarif-mounth"><?php echo get_post_meta(get_the_id(), 'month', true)  ?></h3>
                            <p class="tarif-mounth-descr">месяц доступа</p>


                            <?php
                            $photo = get_post_meta(get_the_ID(), 'img', true);
                            $fullImg = pods_image_url($photo, 'large');
                            echo '<img src="' . $fullImg . '" alt="тестовая картинка">'
                            ?>


                        </div>
                        <div class="tarif-card-down">
                            <p class="tarif-card-desct">
                                <?php the_content()  ?>
                            </p>
                            <p class="tariff-price"><?php echo get_post_meta(get_the_id(), 'price', true); ?> <br><span class="price-descr">рублей</span></p>
                            <button class="btn btn-dark">Выбрать</button>
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