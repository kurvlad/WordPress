<?php
get_header();
// Template Name: lesson
?>


<main>


    <section class="lesson">
        <div class="container">
            <div class="row">
                <div class="col-3 lesson-filter">
                    <h2 class="h2 filter-title">Фильтр</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Уровень
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                                <div class="accordion-body">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="traine">
                                        <label class="form-check-label" for="traine">
                                            Новичок
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="jun">
                                        <label class="form-check-label" for="jun">
                                            Начинающий
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="middle">
                                        <label class="form-check-label" for="middle">
                                            Средний
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hard">
                                        <label class="form-check-label" for="hard">
                                            Сложный
                                        </label>
                                    </div>




                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Тип йоги
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hatha">
                                        <label class="form-check-label" for="hatha">
                                            Хатха
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="vinasa">
                                        <label class="form-check-label" for="vinasa">
                                            Виньяса
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="kundalini">
                                        <label class="form-check-label" for="kundalini">
                                            Кундалини
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="meditation">
                                        <label class="form-check-label" for="meditation">
                                            Медитация
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Инструктор
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="rezeda">
                                        <label class="form-check-label" for="rezeda">
                                            Резеда Анамова


                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="olga">
                                        <label class="form-check-label" for="olga">
                                            Ольга Ларионова
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="stepan">
                                        <label class="form-check-label" for="stepan">
                                            Степан Чекменёв


                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="marina">
                                        <label class="form-check-label" for="marina">
                                            Марина Пастухова
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="filter-continius">
                            <h4 class="h4">Продолжительность (мин)</h4>
                            <div class="middle">
                                <div class="multi-range-slider">
                                    <input type="range" id="input-left" min="0" max="80" value="15">
                                    <input type="range" id="input-right" min="0" max="80" value="60">

                                    <div class="slider">
                                        <div class="track"></div>
                                        <div class="range"></div>
                                        <div class="thumb left">
                                            <div class="text-range text-range-left">4</div>

                                        </div>
                                        <div class="thumb right">
                                            <div class="text-range text-range-right">4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="itsfree">
                            <label class="form-check-label" for="itsfree">
                                Бесплатные уроки
                            </label>
                        </div>
                        <button class="btn btn-dark btn-filter">Поиск</button>


                    </div>
                </div>
                <div class="col-9 lesson-list">
                    <h2 class="lesson-title"><?php the_title() ?></h2>
                    <p><?php echo get_post_meta(get_the_ID(), 'descr', true) ?></p>


                    <div class="row">
                        <?php $my_posts = get_posts(array(
                            'numberposts' => -1,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  => '',
                            'post_type'   => 'post-video',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ));

                        global $post;

                        foreach ($my_posts as $post) {
                            setup_postdata($post);
                        ?>

                            <div class="col-4">
                                <div class="card card-lesson">
                                    <a href="<?php the_permalink(); ?>" class="card-link">
                                        <div class="card-img-block  lesson-card-img-block">

                                            <img src="<?php echo get_the_post_thumbnail_url()  ?>" class="card-img-top card-img-top-lesson w-100 h-100" alt="...">
                                            <div class="lesson-video-info lesson-video-info-d-block">
                                                <div class="lesson-video-free">Бесплатный урок</div>

                                                <button class="nav-link nav-link-lesson"><img class="video-btn video-btn-lesson" src="<?php echo get_template_directory_uri()  ?>/assets/img/play.png" alt=""></button>
                                            </div>
                                            <div class="lesson-video-p">
                                                <p class="video-text video-name video-name-lesson">Кундалини</p>
                                                <p class="video-text video-time video-time-lesson">20 мин</p>
                                            </div>


                                            <div class="lesson-video-info lesson-video-info-hover">

                                                <div class="lesson-card-content">
                                                    <h4 class="lesson-card-title">Описание</h4>
                                                    <p class="lesson-card-text">Эта эффективная и веками проверенная практика воздействует сразу
                                                        на
                                                        физическое и тонкое тело (оно отвечает за эмоции и мысли человека)</p>
                                                    <p class="lesson-card-text"><?php echo wp_date(get_option('date_format'), get_post_timestamp());
                                                                                ?></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body card-body-lesson">
                                            <h3 class="lesson-name"><?php the_title() ?> - <span class="lesson-name-type"><?php echo get_post_meta(get_the_ID(), 'trainer-type', true) ?></span></h3>
                                            <p class="card-text card-text-lesson"><?php echo get_post_meta(get_the_ID(), 'trainer-level', true) ?></p>
                                            <p class="card-text card-text-lesson-bottom "><?php echo get_post_meta(get_the_ID(), 'trainer-name', true) ?></p>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }

                        wp_reset_postdata(); // сброс
                        ?>


                    </div>







                    <div class="more"><button class="btn btn-more">Загрузить больше</button></div>


                </div>


            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>