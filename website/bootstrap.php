<?php

if($_SERVER['SERVER_NAME']=='localhost') {
  $_SERVER['DOCUMENT_ROOT']='C:\xampp\htdocs\EvoTech\website';
}

use EvoTech\Translation;

include 'vendor/autoload.php';

$locale = $_GET['lang'] ?? 'de';

if ($locale === 'de' || $locale === 'en') {
    $translation = new Translation($locale);
} else {
    $translation = new Translation('de');
}

$formData = [
    'Einsatz' => [
        ['label' => 'Privat'],
        ['label' => 'Kommerziell'],
    ],
    'Headset' => [
        ['label' => 'Nein', 'price' => 0],
        ['label' => 'Ja', 'price' => 999],
    ],
    'Lautsprecher' => [
        ['label' => 'Nein', 'price' => 0],
        ['label' => 'Ja', 'price' => 999],
    ],
    '4-Punkt-Gurte' => [
        ['label' => 'Nein', 'price' => 0],
        ['label' => 'Ja', 'price' => 999],
    ],
    'Kabeleingang' => [
        ['label' => 'Vorne'],
        ['label' => 'Hinten'],
    ],
    'Simulatorfarbe' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Spezielle Farbangabe' => [
    ],
    'Sitzfarbe' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Polsterfarbe' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Fadenfarbe' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Startnummer' => [
    ],
    'Farbe der Startnummer' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Nummer-Design' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Hintergrund Startnummer' => [
        ['rot'],
        ['blau'],
        ['grün'],
    ],
    'Fahrername' => [
    ],
];