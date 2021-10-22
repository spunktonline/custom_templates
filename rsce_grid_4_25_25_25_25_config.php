<?php

#####################################
### Created by S Punkt Online #######
### https://www.s-punkt-online.de ###
#####################################

return array(
    'label' => array(
        'Grid-Vorlage: 4-Spaltig (25x25x25x25)',
        'Erzeugt einen Container mit 4 Spalten',
    ),
    'types' => array('content', 'module'),
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => array('none'),
    ),
    'fields' => array(
        'background' => array(
            'label' => array('Hintergrundfarbe', 'Lassen Sie dieses Feld leer um die Standardfarbe zu verwenden.'),
            'inputType' => 'text',
            'eval' => array(
                'colorpicker' => true,
                'tl_class' => 'w50',
            ),
        ),
        ### List ###
        'list' => array(
            'label' => array(
                'de' => array('Container ', 'Hier können Sie 4 Spalten ergänzen'),
            ),
            'elementLabel' => array(
                'de' => 'Spalte %s',
            ),

            'inputType' => 'list',
            'minItems' => 1,
            'maxItems' => 4,
            'fields' => array(
                
                ### image_position ###
                'image_position' => array(
                    'label' => array('Bildposition', ''),
                    'inputType' => 'select',
                    'options' => array(
                        'top' => 'Bild nach oben',
                        'bottom' => 'Bild nach unten',
                    ),
                    'eval' => array('tl_class' => 'w50'),
                ),
                
                ### image ###
                'image' => array(
                    'label' => array(
                        'de' => array('Bild', 'Hier können Sie ein Icon für die Leistun auswählen'),
                    ),
                    'inputType' => 'fileTree',
                    'eval' => array(
                        'fieldType' => 'radio',
                        'filesOnly' => true,
                        'extensions' => 'jpg,jpeg,png,gif,svg',
                        'tl_class' => 'w50 clr'
                    ),
                ),
                
                ### image_alt ###
                'image_alt' => array(
                    'label' => array('Alt-Attribute', 'Hier können Sie Alt-Attribute hinzufügen'),
                    'inputType' => 'text',
                    'eval' => array('mandatory'=>true, 'tl_class'=>'w50 clr'),
                ),
                
                ### image_size ###
                'size' => array(
                    'label' => array('Bildbreite und Bildhöhe', ''),
                    'inputType' => 'imageSize',
                    'options' => \System::getImageSizes(),
                    'reference' => &$GLOBALS['TL_LANG']['MSC'],
                    'eval' => array(
                        'rgxp' => 'digit',
                        'includeBlankOption' => true,
                        'tl_class' => 'clr',
                    ),
                ),
                
                ### text ###
                'description' => array(
                    'label' => array('Beschreibung für Unten', 'Ausführliche Beschreibung der Stelle'),
                    'eval' => array('rte' => 'tinyMCE'),
                    'inputType' => 'textarea',
                    'tl_class' => 'clr',
                ),
            ),
        ),
    ),
);