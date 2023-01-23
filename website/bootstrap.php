<?php

use EvoTech\Translation;

include 'vendor/autoload.php';

$locale = $_GET['lang'];

if ($locale === 'de' || $locale === 'en') {
    $translation = new Translation($locale);
} else {
    $translation = new Translation('de');
}

$formData = [
    'Einsatz' => [
        ['label' => 'A', 'price' => 10],
        ['label' => 'B', 'price' => 50],
    ],
    'Headset' => [
        ['label' => 'C', 'price' => 60],
        ['label' => 'D', 'price' => 70],
    ],
    'Lautsprecher' => [
        ['label' => 'E', 'price' => 90],
        ['label' => 'F', 'price' => 0],
    ],
];