<?php
$is_auth = rand(0, 1);
$user_name = 'Alex'; // укажите здесь ваше имя
$price = ['price'];

function priceFormat($price)
{
    print number_format(ceil($price), 0, ',', ' ') . ' ₽';
}


function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}