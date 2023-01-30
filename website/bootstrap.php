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
  'Basis' => [
    'Einsatz' => [
      ['label' => 'Privat'],
      ['label' => 'Kommerziell'],
    ],
  ],
  'Farben' => [
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
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Spezielle Farbangabe' => [
    ],
    'Sitzfarbe' => [
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Polsterfarbe' => [
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Fadenfarbe' => [
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Startnummer' => [
    ],
    'Farbe der Startnummer' => [
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Nummer-Design' => [
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Hintergrund Startnummer' => [
        ['label' => 'rot'],
        ['label' => 'blau'],
        ['label' => 'grün'],
    ],
    'Fahrername' => [
    ],
  ]
];