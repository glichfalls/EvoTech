<?php

if($_SERVER['SERVER_NAME']=='localhost') {
  //$_SERVER['DOCUMENT_ROOT']='C:\xampp\htdocs\EvoTech\website';
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
    'Lizenz  (Asetto Corsa)' => [
      ['label' => 'Privat (Aufpreis 29.-)', 'price' => 29],
      ['label' => 'Commercial Edition (Aufpreis 700.-)', 'price' => 700],
      ['label' => 'Pro Lizenz (Aufpreis 2\'000.-)', 'price' => 2000]
    ],
    'Headset mit Halter' => [
      ['label' => 'Nein', 'price' => 0],
      ['label' => 'Ja (Aufpreis 103.-)', 'price' => 103]
    ],
    'Lautsprecher mit Halter' => [
      ['label' => 'Nein', 'price' => 0],
      ['label' => 'Ja (Aufpreis 82.-)', 'price' => 82]
    ],
    '4-Punkt-Gurte mit Halterung' => [
      ['label' => 'Nein', 'price' => 0],
      ['label' => 'Ja (Aufpreis 72.-)', 'price' => 72]
    ],
    'Farbe der 4-Punkt-Gurte' => [
      ['label' => 'Wähle eine Farbe'],
      ['label' => 'rot', 'price' => 0],
      ['label' => 'blau', 'price' => 0],
      ['label' => 'schwarz', 'price' => 0]
    ],
    'Farbe vom Abschleppgurt' => [
      ['label' => 'Wähle eine Farbe'],
      ['label' => 'rot', 'price' => 0],
      ['label' => 'blau', 'price' => 0],
      ['label' => 'grau', 'price' => 0],
      ['label' => 'orange', 'price' => 0],
      ['label' => 'giftgrün', 'price' => 0],
      ['label' => 'schwarz', 'price' => 0]
    ],
    'Kabeleingang' => [
      ['label' => 'vorne', 'price' => 0],
      ['label' => 'hinten', 'price' => 0]
    ],
  ],
  'Farben' => [
    'Simulatorfarbe' => [
        ['label' => 'Wähle eine Farbe', 'price' => 0],
        ['label' => 'Teifschwarz glanz - RAL 9005', 'price' => 0],
        ['label' => 'Teifschwarz matt - RAL 9005', 'price' => 0],
        ['label' => 'Silber metallic - C6C6C6', 'price' => 0],
        ['label' => 'Signalweiss metallic - RAL 9003', 'price' => 0],
        ['label' => 'Ferrari Rot - C4151C', 'price' => 0],
        ['label' => 'McLaren Orange PMS 151 C', 'price' => 0],
        ['label' => 'Red Bull Blue #1F3F6E', 'price' => 0],
        ['label' => 'Aston Martin Grün - 00352F', 'price' => 0],
        ['label' => 'Ultramarinblau metallic - RAL 5002', 'price' => 0],
        ['label' => 'Leuchtgelb - RAL 1026', 'price' => 0],
        ['label' => 'Pink metallic - RAL 4003-P', 'price' => 0],
        ['label' => 'Giftgrün - 39FF14', 'price' => 0],
        ['label' => 'anderer Farbcode', 'price' => 0]
    ],
    'Spezielle Farbangabe' => [
        /* input */
    ],
  ],
  'Race-Seat' => [
    'Sitzfarbe' => [
        ['label' => 'Wähle eine Farbe', 'price' => 0],
        ['label' => 'Teifschwarz glanz - RAL 9005', 'price' => 0],
        ['label' => 'Teifschwarz matt - RAL 9005', 'price' => 0],
        ['label' => 'Anthrazit - RAL 7016', 'price' => 0],
        ['label' => 'Lichtgrau - RAL 7035', 'price' => 0],
        ['label' => 'Signalweiss metallic - RAL 9003', 'price' => 0],
        ['label' => 'Petronas Blau - 34E4CB', 'price' => 0],
        ['label' => 'Ferrari Rot - C4151C', 'price' => 0],
        ['label' => 'anderer Farbcode', 'price' => 0]
    ],
    'Spezielle Farbeingabe' => [
        /* input */
    ],
    'Polsterfarbe' => [
      ['label' => 'schwarz', 'price' => 0]
    ],
    'Polstermaterial' => [
      ['label' => 'Zellkautschuk', 'price' => 0]
    ],
    'Polsterform' => [
      ['label' => 'Standard', 'price' => 0]
    ],
  ],
  'Numberplates' => [
    'Startnummer' => 'input',
    'Nummer-Design' => [
      ['label' => 'Wähle eine Nummerdesign', 'price' => 0],
      ['label' => 'Code - 01', 'price' => 0],
      ['label' => 'Code - 02', 'price' => 0],
      ['label' => 'Code - 03', 'price' => 0],
      ['label' => 'Code - 04', 'price' => 0],
      ['label' => 'Code - 05', 'price' => 0],
      ['label' => 'Code - 06', 'price' => 0]
    ],
    'Farbe der Startnummer' => [
      ['label' => 'Wähle eine Farbe'],
      ['label' => 'schwarz', 'price' => 0],
      ['label' => 'weiss', 'price' => 0],
      ['label' => 'gelb', 'price' => 0],
      ['label' => 'grün', 'price' => 0],
      ['label' => 'rot', 'price' => 0],
      ['label' => 'blau', 'price' => 0],
      ['label' => 'grau', 'price' => 0],
      ['label' => 'Petronas Blau - 34E4CB', 'price' => 0]
    ],
    'Hintergrund Startnummer' => [
      ['label' => 'Wähle eine Farbe'],
      ['label' => 'schwarz', 'price' => 0],
      ['label' => 'weiss', 'price' => 0],
      ['label' => 'gelb', 'price' => 0],
      ['label' => 'grün', 'price' => 0],
      ['label' => 'rot', 'price' => 0],
      ['label' => 'blau', 'price' => 0],
      ['label' => 'grau', 'price' => 0],
      ['label' => 'Petronas Blau - 34E4CB', 'price' => 0]
    ],
    'Fahrername' => 'input'
  ],
  'Bemerkungen' => [
    'Bemerkungen' => 'textarea'
  ]
];