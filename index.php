<?php
require_once ('functions.php');
require_once ('data.php');

//function show_date($timestamp)
//{
//    $dt = data_creat();
//    $dt = data_timestamp_set($dt, $timestamp);
//
//    $format = formatDate($dt, "d.m.Y H:i");
//    return $format;
//
//}

$page_content = include_template('index.php', [
        'categories' => $categories,
        'lots' => $lots
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





