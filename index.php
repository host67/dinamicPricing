<?php
session_start();
include 'CalculateMargin.php';

$obj = new CalculateMargin();

$settings = $obj->getSettings();
if ( $settings ) {
    var_dump($settings);
} else {
    echo "Ошибка получения настроек!";
    exit;
}
