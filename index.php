<?php
require_once ('functions.php');
require_once ('data.php');

date_default_timezone_set('Europe/Moscow');





$page_content = include_template('index.php', [
        'categories' => $categories,
        'lots' => $lots,
        'format' => $format
]);

$layout_content = include_template('layout.php', [
        'is_auth' => $is_auth,
        'user_name' => $user_name,
        'content' => $page_content,
        'categories' => $categories,
        'title' => 'Доска объявлений'

]);

print $layout_content;
?>





