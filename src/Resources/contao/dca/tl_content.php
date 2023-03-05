<?php

$GLOBALS['TL_CSS'][] = 'bundles/contaoelements/css/content_box.css||static';

// content_box_stop

$GLOBALS['TL_DCA']['tl_content']['palettes']['content_box_stop'] = '
    {type_legend},type;
    {invisible_legend:hide},invisible,start,stop;
';

// content_box_start

$GLOBALS['TL_DCA']['tl_content']['palettes']['content_box_start'] = '
    {type_legend},type;
    {content_box_properties},content_box_properties_width,content_box_properties_pt,content_box_properties_pb,content_box_properties_mt,content_box_properties_mb;
    {content_box_background},content_box_background_color,content_box_background_color_custom,addContentBoxImage;
    {content_box_content},content_box_content_color_inverted,content_box_content_text_align;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop;
';

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addContentBoxImage';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addContentBoxImage'] = 'singleSRC,content_box_background_parallax,content_box_background_overlay';
$GLOBALS['TL_DCA']['tl_content']['fields']['addContentBoxImage'] = [
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange' => true, 'tl_class' => 'w50 m12'),
    'sql'                     => array('type' => 'boolean', 'default' => false)
];

// content_box_properties

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_width'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_width'],
    'inputType' => 'select',
    'options' => [
        '100' => '100%',
        '75' => '75rem',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 3,
        'default' => '100',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_pt'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_pt'],
    'inputType' => 'select',
    'options' => [
        '0' => '0px',
        '16' => '16px',
        '32' => '32px',
        '48' => '48px',
        '64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 2,
        'default' => '0',
    ],
    'eval' => ['tl_class' => 'clr w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_pb'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_pb'],
    'inputType' => 'select',
    'options' => [
        '0' => '0px',
        '16' => '16px',
        '32' => '32px',
        '48' => '48px',
        '64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 2,
        'default' => '0',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_mt'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_mt'],
    'inputType' => 'select',
    'options' => [
        '0' => '0px',
        '16' => '16px',
        '32' => '32px',
        '48' => '48px',
        '64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 2,
        'default' => '0',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_mb'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_mb'],
    'inputType' => 'select',
    'options' => [
        '0' => '0px',
        '16' => '16px',
        '32' => '32px',
        '48' => '48px',
        '64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 2,
        'default' => '0',
    ],
    'eval' => ['tl_class' => 'w50'],
];

// content_box_background

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_background_color'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_background_color'],
    'inputType' => 'select',
    'options' => [
        'ffffff' => 'weiß',
        'eeee' => 'hellgrau',
        '252525' => 'grau',
        '0d5289' => 'blau',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 6,
        'default' => 'ffffff',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_background_color_custom'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_background_color_custom'],
    'inputType' => 'text',
    'sql' => [
        'type' => 'string',
        'length' => 6,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50', 'isHexColor' => true, 'maxlength' => 6, 'minlength' => 6],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_background_parallax'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_background_parallax'],
    'inputType' => 'checkbox',
    'sql' => [
        'type' => 'boolean',
        'default' => false,
    ],
    'eval' => ['tl_class' => 'w50 cbx m12'],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_background_overlay'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_background_overlay'],
    'inputType' => 'select',
    'options' => [
        '' => '-',
        '40' => '40%',
        '60' => '60%',
        '80' => '80%'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 2,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];


// content_box_content

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_content_color_inverted'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_content_color_inverted'],
    'inputType' => 'checkbox',
    'sql' => [
        'type' => 'boolean',
        'default' => false,
    ],
    'eval' => ['tl_class' => 'w50 cbx m12'],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_content_text_align'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_content_text_align'],
    'inputType' => 'select',
    'options' => [
        '' => 'Links',
        'alignCenter' => 'Zentriert',
        'alignRight' => 'Rechts',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 11,
        'default' => 'left',
    ],
    'eval' => ['tl_class' => 'w50'],
];
