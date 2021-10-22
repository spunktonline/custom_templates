<?php

#####################################
### Created by S Punkt Online #######
### https://www.s-punkt-online.de ###
#####################################

return array(
    'label' => array(
        'Grid-Vorlage: 3-Spaltig',
        'Erzeugt einen Container mit 3 Spalten',
    ),
    'types' => array('content', 'module'),
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => array('none'),
    ),
    'fields' => array(

        ### column definition ###
        'col_definition' => array(
            'label' => array('Spaltengröße', 'Standardwert: 33% 33% 33% 33%'),
            'inputType' => 'select',
            'options' => array(
                'col_8' => '33%, 33%, 33%',
                'col_12_6_6' => '50%, 25%, 25%',
                'col_6_12_6' => '25%, 50%, 25%',
                'col_6_6_12' => '25%, 25%, 50%',
                'col_10_6_6' => '40%, 30%, 30%',
                'col_6_10_6' => '30%, 40%, 30%',
                'col_6_6_10' => '30%, 30%, 40%',
                'col_4_10_10' => '20%, 40%, 40%',
                'col_10_4_10' => '40%, 20%, 40%',
                'col_10_10_4' => '40%, 40%, 20%',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),

        ### background-color ###
        'background' => array(
            'label' => array('Hintergrundfarbe', 'Lassen Sie dieses Feld leer um die Standardfarbe zu verwenden.'),
            'inputType' => 'text',
            'eval' => array(
                'colorpicker' => true,
                'tl_class' => 'w50 clr',
            ),
        ),
        ################
        ### column 1 ###
        ################
        'col_1' => array(
            'label' => array('Erste Spalte', 'Fügen Sie hier Ihre Bild und Text ein.'),
            'inputType' => 'group',
        ),

        ### image_position ###
        'image_position' => array(
            'label' => array('Bildposition', ''),
            'inputType' => 'select',
            'options' => array(
                'top' => 'Bild nach oben',
                'bottom' => 'Bild nach unten',
                'image_text' => 'Bild links, Text rechts',
                'text-image' => 'Text links, Bild rechts',
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
        
        ################
        ### column 2 ###
        ################
        'col_2' => array(
            'label' => array('Zweite Spalte', 'Fügen Sie hier Ihre Bild und Text ein.'),
            'inputType' => 'group',
        ),
        ### image_position ###
        'image_position_1' => array(
            'label' => array('Bildposition', ''),
            'inputType' => 'select',
            'options' => array(
                'top' => 'Bild nach oben',
                'bottom' => 'Bild nach unten',
                'image_text' => 'Bild links, Text rechts',
                'text-image' => 'Text links, Bild rechts',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),

        ### image ###
        'image_1' => array(
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

        ### image_size ###
        'size_1' => array(
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
        'description_1' => array(
            'label' => array('Beschreibung für Unten', 'Ausführliche Beschreibung der Stelle'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
            'tl_class' => 'clr',
        ),

        ################
        ### column 3 ###
        ################
        'col_3' => array(
            'label' => array('Drite Spalte', 'Fügen Sie hier Ihre Bild und Text ein.'),
            'inputType' => 'group',
        ),
        ### image_position ###
        'image_position_2' => array(
            'label' => array('Bildposition', ''),
            'inputType' => 'select',
            'options' => array(
                'top' => 'Bild nach oben',
                'bottom' => 'Bild nach unten',
                'image_text' => 'Bild links, Text rechts',
                'text-image' => 'Text links, Bild rechts',
            ),
            'eval' => array('tl_class' => 'w50'),
        ),
        
        ### image ###
        'image_2' => array(
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

        ### image_size ###
        'size_2' => array(
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
        'description_2' => array(
            'label' => array('Beschreibung für Unten', 'Ausführliche Beschreibung der Stelle'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
            'tl_class' => 'clr',
        ),
    ),
);