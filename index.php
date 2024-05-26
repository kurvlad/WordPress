<?php
get_header();
// Template Name: index
?>

<main>


    <section class="hero">
        <div class="hero-container  container">
            <div class="hero-content">
                <h1 class="h1"><?php the_title(); ?></h1>

                <button class="btn btn-white hero-btn">Начать бесплатный урок</button>

            </div>
        </div>
    </section>


    <section class="health">
        <div class="container health-containe">
            <h2 class="h2 health-title">
                ЗДОРОВОЕ ТЕЛО И ГАРМОНИЯ ПОВСЮДУ
            </h2>

            <div class="health-card-block">
                <div class="row row-cols-1 row-cols-md-4 g-4">

                    <?php $my_posts = get_posts(array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => '',
                        'post_type'   => 'healthbody',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));

                    global $post;

                    foreach ($my_posts as $post) {
                        setup_postdata($post);
                    ?>

                        <div class="col">
                            <div class="card h-100">
                                <?php
                                $photo = get_post_meta(get_the_id(), 'healthbody-img', true);
                                $fullImg = pods_image_url($photo, 'large');
                                echo  '<img src="' . $fullImg . '" class="card-img-top" alt="...">'
                                ?>

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo get_post_meta(get_the_id(), 'healthbody-title', true); ?></h5>
                                    <p class="card-text"><?php echo get_post_meta(get_the_id(), 'healthbody-descr', true); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>

        </div>
    </section>


    <section class="program">
        <div class="container program-containe">
            <div class="row">
                <div class="col">
                    <div class="program-left">

                        <h2 class="program-title">ВЫБЕРИ ПРОГРАММУ, КОТОРАЯ ПОДХОДИТ ИМЕННО ТЕБЕ</h2>
                        <p class="program-text">На aiogi ты найдешь комплексные программы в зависимости от твоего направления и
                            уровня
                        </p>
                        <button class="button btn-dark btn-program">Выбрать программу</button>
                    </div>
                </div>
                <div class="col">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/program.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="staff">
        <div class="container staff-contane">
            <h2 class="staff-title">ДОВЕРЬСЯ ЭКСПЕРТАМ СВОЕГО ДЕЛА</h2>
            <p class="staff-text">Занимайся с лучшими инструкторами по всему миру. Наши преподователи помогут тебе
                наработать
                новые навыки, улучшить твою практику йоги и достигнуть поставленных целей. И всегда с позитивным настроем!</p>


            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="health-card-block">
                            <div class="row row-cols-1 row-cols-md-4 g-4">

                                <?php $my_posts = get_posts(array(
                                    'numberposts' => 4,
                                    'category'    => 0,
                                    'orderby'     => 'date',
                                    'offset' => 0,
                                    'order'       => 'ASC',
                                    'include'     => array(),
                                    'exclude'     => array(),
                                    'meta_key'    => '',
                                    'meta_value'  => '',
                                    'post_type'   => 'trainers',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ));
                                foreach ($my_posts as $post) {
                                    setup_postdata($post);
                                ?>

                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="" class="card-img-top card-img-staff">
                                            <div class="card-body card-body-staff">
                                                <h5 class="card-title card-title-staff"><?php the_title(); ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>


                                <?php
                                }
                                wp_reset_postdata(); // сброс
                                ?>
                            </div>


                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="health-card-block">
                            <div class="row row-cols-1 row-cols-md-4 g-4">

                                <?php $my_posts = get_posts(array(
                                    'numberposts' => 4,
                                    'category'    => 0,
                                    'orderby'     => 'date',
                                    'offset' => 4,
                                    'order'       => 'ASC',
                                    'include'     => array(),
                                    'exclude'     => array(),
                                    'meta_key'    => '',
                                    'meta_value'  => '',
                                    'post_type'   => 'trainers',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ));
                                foreach ($my_posts as $post) {
                                    setup_postdata($post);
                                ?>

                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="<?php echo get_the_post_thumbnail_url()  ?>" alt="" class="card-img-top card-img-staff">
                                            <div class="card-body card-body-staff">
                                                <h5 class="card-title card-title-staff"><?php the_title(); ?></h5>
                                            </div>
                                        </div>
                                    </div>


                                <?php
                                }
                                wp_reset_postdata(); // сброс
                                ?>
                            </div>
                        </div>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </div>

    </section>

    <section class="subscr">
        <div class="container subscr-containe">
            <div class="row">
                <div class="col">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/subscr.jpg" alt="">
                </div>
                <div class="col subscr-right">
                    <h2 class="subscr-title">ГОТОВЫ ПОГРУЗИТЬСЯ В МИР aiogi?</h2>
                    <p class="subscr-text">Неограниченный доступ к библиотеке от 700 рублей в месяц.
                        Отменить подписку можно в любой момент
                    </p>
                    <button class="button btn btn-subscr">Оформить подписку</button>
                </div>

            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>