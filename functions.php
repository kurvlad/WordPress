<?php
// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'yoga_scripts');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function yoga_scripts()
{
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_script('script', get_template_directory_uri() . '/assets/src/filter.js', array(), '1.0.0', true);
	// wp_enqueue_script('script', get_template_directory_uri() . '/assets/src/index.js', array(), '1.0.0', true);
};

show_admin_bar(false);

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('trainers'));

add_theme_support('menus');

add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail()
{
	$mail = $POST['mail'];

	$to = 'kurvlad@mail.ru';
	$subject = 'asdas';
	$message = 'asdas';

	remove_all_filters('wp_mail_from');
	remove_all_filters('wp_mail_from_name');

	$headers = array(
		'From: Me Myself <me@example.net>',
		'content-type: text/html',
		'cc: John Q Codex <jqc@wordpress.org>',
		'cc: John2 Codex <j2qc@wordpress.org>',
		'bcc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
	);

	wp_mail($to, $subject, $message, $headers);
	wp_die();
}
