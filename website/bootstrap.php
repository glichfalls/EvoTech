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

$formDataRace = [
  'Basis' => [
    'Lizenz  (Asetto Corsa)' => [
      ['label' => 'Privat (Aufpreis 29.-)', 'price' => 10637],
      ['label' => 'Commercial Edition (Aufpreis 700.-)', 'price' => 11308],
      ['label' => 'Pro Lizenz (Aufpreis 2\'000.-)', 'price' => 12608]
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
    'Spezielle Farbangabe' => 'input',
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
    'Spezielle Farbeingabe' => 'input',
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

$formDataPro = [
  'Basis' => [
    'Lizenz  (Asetto Corsa)' => [
      ['label' => 'Privat (Aufpreis 29.-)', 'price' => 12587],
      ['label' => 'Commercial Edition (Aufpreis 700.-)', 'price' => 13258],
      ['label' => 'Pro Lizenz (Aufpreis 2\'000.-)', 'price' => 14558]
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
    'Spezielle Farbangabe' => 'input',
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
    'Spezielle Farbeingabe' => 'input',
    'Polsterfarbe' => [
      ['label' => 'Wähle eine Farbe', 'price' => 0],
      ['label' => '#1', 'price' => 0],
      ['label' => '#2', 'price' => 0],
      ['label' => '#3', 'price' => 0],
      ['label' => '#4', 'price' => 0],
      ['label' => '#5', 'price' => 0],
      ['label' => '#6', 'price' => 0],
      ['label' => '#7', 'price' => 0],
      ['label' => '#8', 'price' => 0],
      ['label' => '#9', 'price' => 0],
      ['label' => '#10', 'price' => 0],
      ['label' => '#11', 'price' => 0],
      ['label' => '#12', 'price' => 0],
      ['label' => '#13', 'price' => 0],
      ['label' => '#14', 'price' => 0],
      ['label' => '#15', 'price' => 0],
      ['label' => '#16', 'price' => 0],
      ['label' => '#17', 'price' => 0],
      ['label' => '#18', 'price' => 0],
      ['label' => '#19', 'price' => 0],
      ['label' => '#20', 'price' => 0],
      ['label' => '#21', 'price' => 0],
      ['label' => '#22', 'price' => 0],
      ['label' => '#23', 'price' => 0],
      ['label' => '#24', 'price' => 0],
      ['label' => '#25', 'price' => 0],
    ],
    'Fadenfarbe' => [
      ['label' => 'Wähle eine Farbe', 'price' => 0],
      ['label' => '#1', 'price' => 0],
      ['label' => '#2', 'price' => 0],
      ['label' => '#3', 'price' => 0],
      ['label' => '#4', 'price' => 0],
      ['label' => '#5', 'price' => 0],
      ['label' => '#6', 'price' => 0],
      ['label' => '#7', 'price' => 0],
      ['label' => '#8', 'price' => 0],
      ['label' => '#9', 'price' => 0],
      ['label' => '#10', 'price' => 0],
      ['label' => '#11', 'price' => 0],
      ['label' => '#12', 'price' => 0],
      ['label' => '#13', 'price' => 0],
      ['label' => '#14', 'price' => 0],
      ['label' => '#15', 'price' => 0],
      ['label' => '#16', 'price' => 0],
      ['label' => '#17', 'price' => 0],
      ['label' => '#18', 'price' => 0],
      ['label' => '#19', 'price' => 0],
      ['label' => '#20', 'price' => 0],
      ['label' => '#21', 'price' => 0],
      ['label' => '#22', 'price' => 0],
      ['label' => '#23', 'price' => 0],
      ['label' => '#24', 'price' => 0],
      ['label' => '#25', 'price' => 0],
    ],
    'Polsterform' => [
      ['label' => 'RCC-P4ST123', 'price' => 0],
      ['label' => 'RCC-P4TL123', 'price' => 0],
      ['label' => 'RCC-P4CS123', 'price' => 0],
      ['label' => 'RCC-P5ST123', 'price' => 0],
      ['label' => 'RCC-P5TL123', 'price' => 0],
      ['label' => 'RCC-P5CS123', 'price' => 0],
      ['label' => 'RCC-P6ST123', 'price' => 0],
      ['label' => 'RCC-P6TL123', 'price' => 0],
      ['label' => 'RCC-P6CS123', 'price' => 0],
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