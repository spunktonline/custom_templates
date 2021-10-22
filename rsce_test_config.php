<?php

return array(
    'label' => array(
        'Responsive Image Zentrierter Bereich Anfang',
        'Erzeugt einen zentrierten Inhaltsbereich',
    ),
    'types' => array('content', 'module'),
    'standardFields' => array('cssID', 'space'),
    'wrapper' => array(
        'type' => 'start',
    ),
    'fields' => array(
        'borderTop' => array(
            'label' => array('Rahmen oben', 'Erzeugt vor dem Element eine Linie.'),
            'inputType' => 'checkbox',
            'eval' => array('tl_class' => 'w50'),
        ),
        'borderBottom' => array(
            'label' => array('Rahmen unten', 'Erzeugt nach dem Element eine Linie.'),
            'inputType' => 'checkbox',
            'eval' => array('tl_class' => 'w50'),
        ),
        'borderTopColor' => array(
            'label' => array('Rahmenfarbe oben', 'Lassen Sie dieses Feld leer um die Standardfarbe zu verwenden.'),
            'inputType' => 'text',
            'eval' => array(
                'colorpicker' => true,
                'tl_class' => 'w50',
            ),
        ),
        'borderBottomColor' => array(
            'label' => array('Rahmenfarbe unten', 'Lassen Sie dieses Feld leer um die Standardfarbe zu verwenden.'),
            'inputType' => 'text',
            'eval' => array(
                'colorpicker' => true,
                'tl_class' => 'w50',
            ),
        ),
        'borderTopWidth' => array(
            'label' => array('Rahmenbreite oben', 'Lassen Sie dieses Feld leer um die Standardbreite zu verwenden.'),
            'inputType' => 'inputUnit',
            'options' => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
            'eval' => array(
                'includeBlankOption' => true,
                'rgxp' => 'digit_auto_inherit',
                'tl_class' => 'w50',
            ),
        ),
        'borderBottomWidth' => array(
            'label' => array('Rahmenbreite unten', 'Lassen Sie dieses Feld leer um die Standardbreite zu verwenden.'),
            'inputType' => 'inputUnit',
            'options' => array('px', '%', 'em', 'rem', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
            'eval' => array(
                'includeBlankOption' => true,
                'rgxp' => 'digit_auto_inherit',
                'tl_class' => 'w50',
            ),
        ),

        'backgroundImage1' => array(
            'label' => array('Bild 1', 'max-width:599px'),
            'inputType' => 'fileTree',
            'eval' => array(
                'tl_class' => 'clr',
                'multiple' => true,

                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => \Config::get('validImageTypes'),
            ),
        ),

        'backgroundImage2' => array(
            'label' => array('Bild 2', 'max-width:900px'),
            'inputType' => 'fileTree',
            'eval' => array(
                'tl_class' => 'clr',
                'multiple' => true,
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => \Config::get('validImageTypes'),
            ),
        ),

        'backgroundImage3' => array(
            'label' => array('Bild 3', 'max-width:1200px'),
            'inputType' => 'fileTree',
            'eval' => array(
                'tl_class' => 'clr',
                'multiple' => true,
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => \Config::get('validImageTypes'),
            ),
        ),

        'backgroundImage4' => array(
            'label' => array('Bild 4', 'max-width:1920px'),
            'inputType' => 'fileTree',
            'eval' => array(
                'tl_class' => 'clr',
                'multiple' => true,
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => \Config::get('validImageTypes'),
            ),
        ),
        'backgroundImage5' => array(
            'label' => array('Bild 5', 'min-width:1920px'),
            'inputType' => 'fileTree',
            'eval' => array(
                'tl_class' => 'clr',
                'multiple' => true,
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => \Config::get('validImageTypes'),
            ),
        ),

        'backgroundSize' => array(
            'label' => array('HintergrundbildgrÃ¶ÃŸe', ''),
            'inputType' => 'select',
            'options' => array(
                '' => 'Beschnitten',
                'contain' => 'Proportional',
                '100% 100%' => 'Verzerrt',
                'auto auto' => 'OriginalgrÃ¶ÃŸe',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),
        'backgroundPosition' => array(
            'label' => array('Hintergrundposition', 'Nicht mit Parallax-Effekt kombinierbar'),
            'inputType' => 'select',
            'options' => array(
                '' => '-',
                '0 0' => 'Links | Oben',
                '50% 0' => 'Mitte | Oben',
                '100% 0' => 'Rechts | Oben',
                '0 50%' => 'Links | Mitte',
                '50% 50%' => 'Mitte | Mitte',
                '100% 50%' => 'Rechts | Mitte',
                '0 100%' => 'Links | Unten',
                '50% 100%' => 'Mitte | Unten',
                '100% 100%' => 'Rechts | Unten',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),
        'backgroundVariation' => array(
            'label' => array('Hintergrundeffekt', ''),
            'inputType' => 'select',
            'options' => array(
                '' => '-',
                '-background-parallax' => 'Parallax',
                '-background-mousemove' => 'Mit der Maus bewegend',
                '-background-mousemove-inverted' => 'Entgegen der Maus bewegend',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),
        'colorInverted' => array(
            'label' => array('Textfarbe invertieren', 'Helle Textfarbe fÃ¼r dunkle HintergrÃ¼nde und Fotos.'),
            'inputType' => 'checkbox',
            'eval' => array(
                'tl_class' => 'w50 m12',
            ),
        ),
        'height' => array(
            'label' => array('MindesthÃ¶he erzwingen', 'Setzt die MindesthÃ¶he des Bereiches auf einen der im CSS definierten Werte.'),
            'inputType' => 'select',
            'options' => array(
                '' => '-',
                '-small' => 'Schmal',
                '-medium' => 'Mittel',
                '-large' => 'Hoch',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),
        'fullwidth' => array(
            'label' => array('Content-Fullwidth', 'Inhalt Ã¼ber die gesamte Breite anzeigen.'),
            'inputType' => 'checkbox',
            'eval' => array(
                'tl_class' => 'w50 m12',
            ),
        ),
    ),
);