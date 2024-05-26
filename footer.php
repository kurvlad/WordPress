<footer>
    <div class="container">
        <div class="footer-containe">
            <div class="footer-left">
                <div class="footer-left-top">
                    <div class="footer-link">
                        <a href="" class="nav-link foot-link">Обратная связь</a>
                        <a href="" class="nav-link foot-link">Условия пользования</a>
                    </div>
                    <p class="footer-descr">© 2020 aiogi. Все права защищены</p>
                </div>
                <div class="footer-left-bottom">
                    <a href="" class="footer-social footer-social-1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-1.png" alt="">
                    </a>
                    <a href="" class="footer-social footer-social-2"><img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-2.png" alt=""></a>
                    <a href="" class="footer-social footer-social-3"><img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-3.png" alt=""></a>
                </div>
            </div>

            <div class="footer-right">
                <h3 class="footer-title">Подписаться на рассылку</h3>
                <p class="footer-text">Будь в курсе самых последний обновлений</p>
                <form action="<?php echo admin_url('admin-ajax.php?action=callback_mail'); ?>" class="footer-form" id='footer-form'>
                    <input type="text" name="mail" id="" class="footer-input" placeholder="Email" required>
                    <button class="button btn-dark button-footer">Подписаться</button>
                </form>
            </div>
        </div>
    </div>

</footer>

<?php
wp_footer()
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/src/index.js"></script>


</body>

</html>