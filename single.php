<?php
get_header();

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main>


            <section class="video-page">
                <div class="container">
                    <h1 class="video-title"><?php the_title() ?></h1>
                    <div class="video-content">
                        <div class="video-block">
                            
                            <iframe width="560" height="315" src="<?php echo get_post_meta(get_the_id(), 'trainer-video', true) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <ul class="video-sub">
                                <li class="video-descr-item">Инструктор: <?php echo get_post_meta(get_the_ID(), 'trainer-name', true) ?></li>
                                <li class="video-descr-item">Уровень: <?php echo get_post_meta(get_the_ID(), 'trainer-level', true) ?></li>
                                <li class="video-descr-item">Тип йоги: <span class="lesson-name-type"><?php echo get_post_meta(get_the_ID(), 'trainer-type', true) ?></li>
                            </ul>
                        </div>

                        <div class="video-descr">
                            <h3 class="video-title-p"> Описание</h3>
                            <p class="video-p">Доказано, что йога так и работает. Эта эффективная и веками проверенная
                                практика
                                воздействует сразу на физическое и тонкое тело (оно отвечает за эмоции и мысли человека).
                                Тот,
                                кто занимается йогой, становится здоровее и выносливее, после занятий чувствует прилив сил,
                                а
                                также с новой силой может ощутить вкус к жизни.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile;
else : ?>
    <p>Записей нет.</p>
<?php endif; ?>



<?php
get_footer();
?>