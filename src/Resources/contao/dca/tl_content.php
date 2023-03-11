<?php

// row_stop

$GLOBALS['TL_DCA']['tl_content']['palettes']['grid_stop'] = '
    {type_legend},type;
    {invisible_legend:hide},invisible,start,stop;
';

// row_start

$GLOBALS['TL_DCA']['tl_content']['palettes']['grid_start'] = '
    {type_legend},type;
    {grid_properties},grid_properties_cols,grid_properties_gap_col,grid_properties_gap_row;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop;
';

$GLOBALS['TL_DCA']['tl_content']['fields']['grid_properties_cols'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['grid_properties_cols'],
    'inputType' => 'text',
    'default' => '12',
    'sql' => [
        'type' => 'string',
        'length' => 2,
        'default' => '12',
    ],
    'eval' => ['rgxp' => 'digit', 'maxval' => 12, 'minval' => 2, 'tl_class' => 'w50',],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['grid_properties_gap_col'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['grid_properties_gap_col'],
    'inputType' => 'select',
    'options' => [
        '' => '0px',
        'gap-x-8' => '8px',
        'gap-x-16' => '16px',
        'gap-x-32' => '32px',
        'gap-x-64' => '64px',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 8,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'clr w50',],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_properties_gap_row'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['grid_properties_gap_row'],
    'inputType' => 'select',
    'options' => [
        '' => '0px',
        'gap-x-8' => '8px',
        'gap-x-16' => '16px',
        'gap-x-32' => '32px',
        'gap-x-64' => '64px',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 8,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50',],
];

// column_stop

$GLOBALS['TL_DCA']['tl_content']['palettes']['column_stop'] = '
    {type_legend},type;
    {invisible_legend:hide},invisible,start,stop;
';

// column_start

$GLOBALS['TL_DCA']['tl_content']['palettes']['column_start'] = '
    {type_legend},type;
    {column_properties},column_properties_col_start,column_properties_col_end,column_properties_col_start_breakpoints,column_properties_col_end_breakpoints;
    {column_content_properties},column_content_properties_align_items,column_content_properties_justify_content,column_content_properties_text_align;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop;
';

$GLOBALS['TL_DCA']['tl_content']['fields']['column_properties_col_start'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_properties_col_start'],
    'inputType' => 'select',
    'options' => [
        '' => '-',
        'col-start-1' => '1',
        'col-start-2' => '2',
        'col-start-3' => '3',
        'col-start-4' => '4',
        'col-start-5' => '5',
        'col-start-6' => '6',
        'col-start-7' => '7',
        'col-start-8' => '8',
        'col-start-9' => '9',
        'col-start-10' => '10',
        'col-start-11' => '11',
        'col-start-12' => '12',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 12,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['column_properties_col_end'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_properties_col_end'],
    'inputType' => 'select',
    'options' => [
        '' => '-',
        'col-end-1' => '1',
        'col-end-2' => '2',
        'col-end-3' => '3',
        'col-end-4' => '4',
        'col-end-5' => '5',
        'col-end-6' => '6',
        'col-end-7' => '7',
        'col-end-8' => '8',
        'col-end-9' => '9',
        'col-end-10' => '10',
        'col-end-11' => '11',
        'col-end-12' => '12',
        'col-end-13' => '13',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 10,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['column_properties_col_start_breakpoints'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_properties_col_start_breakpoints'],
    'inputType' => 'select',
    'options' => [
        'sm' => [
            'col-start-sm-1' => 'sm - 1',
            'col-start-sm-2' => 'sm - 2',
            'col-start-sm-3' => 'sm - 3',
            'col-start-sm-4' => 'sm - 4',
            'col-start-sm-5' => 'sm - 5',
            'col-start-sm-6' => 'sm - 6',
            'col-start-sm-7' => 'sm - 7',
            'col-start-sm-8' => 'sm - 8',
            'col-start-sm-9' => 'sm - 9',
            'col-start-sm-10' => 'sm - 10',
            'col-start-sm-11' => 'sm - 11',
            'col-start-sm-12' => 'sm - 12',
        ],
        'md' => [
            'col-start-md-1' => 'md - 1',
            'col-start-md-2' => 'md - 2',
            'col-start-md-3' => 'md - 3',
            'col-start-md-4' => 'md - 4',
            'col-start-md-5' => 'md - 5',
            'col-start-md-6' => 'md - 6',
            'col-start-md-7' => 'md - 7',
            'col-start-md-8' => 'md - 8',
            'col-start-md-9' => 'md - 9',
            'col-start-md-10' => 'md - 10',
            'col-start-md-11' => 'md - 11',
            'col-start-md-12' => 'md - 12',
        ],
        'lg' => [
            'col-start-lg-1' => 'lg - 1',
            'col-start-lg-2' => 'lg - 2',
            'col-start-lg-3' => 'lg - 3',
            'col-start-lg-4' => 'lg - 4',
            'col-start-lg-5' => 'lg - 5',
            'col-start-lg-6' => 'lg - 6',
            'col-start-lg-7' => 'lg - 7',
            'col-start-lg-8' => 'lg - 8',
            'col-start-lg-9' => 'lg - 9',
            'col-start-lg-10' => 'lg - 10',
            'col-start-lg-11' => 'lg - 11',
            'col-start-lg-12' => 'lg - 12',
        ],
        'xl' => [
            'col-start-xl-1' => 'xl - 1',
            'col-start-xl-2' => 'xl - 2',
            'col-start-xl-3' => 'xl - 3',
            'col-start-xl-4' => 'xl - 4',
            'col-start-xl-5' => 'xl - 5',
            'col-start-xl-6' => 'xl - 6',
            'col-start-xl-7' => 'xl - 7',
            'col-start-xl-8' => 'xl - 8',
            'col-start-xl-9' => 'xl - 9',
            'col-start-xl-10' => 'xl - 10',
            'col-start-xl-11' => 'xl - 11',
            'col-start-xl-12' => 'xl - 12',
        ],
    ],
    'sql' => 'text NULL',
    'eval' => ['tl_class' => 'w50', 'chosen' => true, 'multiple' => true],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['column_properties_col_end_breakpoints'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_properties_col_end_breakpoints'],
    'inputType' => 'select',
    'options' => [
        'sm' => [
            'col-end-sm-1' => 'sm - 1',
            'col-end-sm-2' => 'sm - 2',
            'col-end-sm-3' => 'sm - 3',
            'col-end-sm-4' => 'sm - 4',
            'col-end-sm-5' => 'sm - 5',
            'col-end-sm-6' => 'sm - 6',
            'col-end-sm-7' => 'sm - 7',
            'col-end-sm-8' => 'sm - 8',
            'col-end-sm-9' => 'sm - 9',
            'col-end-sm-10' => 'sm - 10',
            'col-end-sm-11' => 'sm - 11',
            'col-end-sm-12' => 'sm - 12',
        ],
        'md' => [
            'col-end-md-1' => 'md - 1',
            'col-end-md-2' => 'md - 2',
            'col-end-md-3' => 'md - 3',
            'col-end-md-4' => 'md - 4',
            'col-end-md-5' => 'md - 5',
            'col-end-md-6' => 'md - 6',
            'col-end-md-7' => 'md - 7',
            'col-end-md-8' => 'md - 8',
            'col-end-md-9' => 'md - 9',
            'col-end-md-10' => 'md - 10',
            'col-end-md-11' => 'md - 11',
            'col-end-md-12' => 'md - 12',
        ],
        'lg' => [
            'col-end-lg-1' => 'lg - 1',
            'col-end-lg-2' => 'lg - 2',
            'col-end-lg-3' => 'lg - 3',
            'col-end-lg-4' => 'lg - 4',
            'col-end-lg-5' => 'lg - 5',
            'col-end-lg-6' => 'lg - 6',
            'col-end-lg-7' => 'lg - 7',
            'col-end-lg-8' => 'lg - 8',
            'col-end-lg-9' => 'lg - 9',
            'col-end-lg-10' => 'lg - 10',
            'col-end-lg-11' => 'lg - 11',
            'col-end-lg-12' => 'lg - 12',
        ],
        'xl' => [
            'col-end-xl-1' => 'xl - 1',
            'col-end-xl-2' => 'xl - 2',
            'col-end-xl-3' => 'xl - 3',
            'col-end-xl-4' => 'xl - 4',
            'col-end-xl-5' => 'xl - 5',
            'col-end-xl-6' => 'xl - 6',
            'col-end-xl-7' => 'xl - 7',
            'col-end-xl-8' => 'xl - 8',
            'col-end-xl-9' => 'xl - 9',
            'col-end-xl-10' => 'xl - 10',
            'col-end-xl-11' => 'xl - 11',
            'col-end-xl-12' => 'xl - 12',
        ],
    ],
    'sql' => 'text NULL',
    'eval' => ['tl_class' => 'w50', 'chosen' => true, 'multiple' => true],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['column_content_properties_align_items'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_content_properties_align_items'],
    'inputType' => 'select',
    'options' => [
        'align-center' => 'center',
        'align-end' => 'right',
        'sm' => [
            'align-center-sm' => 'sm - center',
            'align-end-sm' => 'sm - right',
        ],
        'md' => [
            'align-center-md' => 'md - center',
            'align-end-md' => 'md - right',
        ],
        'lg' => [
            'align-center-lg' => 'lg - center',
            'align-end-lg' => 'lg - right',
        ],
        'xl' => [
            'align-center-xl' => 'xl - center',
            'align-end-xl' => 'xl - right',
        ],
    ],
    'sql' => 'text NULL',
    'eval' => ['tl_class' => 'w75', 'chosen' => true, 'multiple' => true],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['column_content_properties_justify_content'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_content_properties_justify_content'],
    'inputType' => 'select',
    'options' => [
        'justify-center' => 'center',
        'justify-end' => 'bottom',
        'sm' => [
            'justify-center-sm' => 'sm - center',
            'justify-end-sm' => 'sm - bottom',
        ],
        'md' => [
            'justify-center-md' => 'md - center',
            'justify-end-md' => 'md - bottom',
        ],
        'lg' => [
            'justify-center-lg' => 'lg - center',
            'justify-end-lg' => 'lg - bottom',
        ],
        'xl' => [
            'justify-center-xl' => 'xl - center',
            'justify-end-xl' => 'xl - bottom',
        ],
    ],
    'sql' => 'text NULL',
    'eval' => ['tl_class' => 'clr w75', 'chosen' => true, 'multiple' => true],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['column_content_properties_text_align'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['column_content_properties_text_align'],
    'inputType' => 'select',
    'options' => [
        'text-center' => 'center',
        'text-right' => 'right',
        'sm' => [
            'text-center-sm' => 'sm - center',
            'text-right-sm' => 'sm - right',
        ],
        'md' => [
            'text-center-md' => 'md - center',
            'text-right-md' => 'md - right',
        ],
        'lg' => [
            'text-center-lg' => 'lg - center',
            'text-right-lg' => 'lg - right',
        ],
        'xl' => [
            'text-center-xl' => 'xl - center',
            'text-right-xl' => 'xl - right',
        ],
    ],
    'sql' => 'text NULL',
    'eval' => ['tl_class' => 'clr w75', 'chosen' => true, 'multiple' => true],
];

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
        '' => '100%',
        'centered' => '75rem',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 8,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_pt'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_pt'],
    'inputType' => 'select',
    'options' => [
        '' => '0px',
        'pt-16' => '16px',
        'pt-32' => '32px',
        'pt-48' => '48px',
        'pt-64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 5,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'clr w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_pb'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_pb'],
    'inputType' => 'select',
    'options' => [
        '' => '0px',
        'pb-16' => '16px',
        'pb-32' => '32px',
        'pb-48' => '48px',
        'pb-64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 5,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_mt'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_mt'],
    'inputType' => 'select',
    'options' => [
        '' => '0px',
        'mt-16' => '16px',
        'mt-32' => '32px',
        'mt-48' => '48px',
        'mt-64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 5,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_properties_mb'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_properties_mb'],
    'inputType' => 'select',
    'options' => [
        '' => '0px',
        'mb-16' => '16px',
        'mb-32' => '32px',
        'mb-48' => '48px',
        'mb-64' => '64px'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 5,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];

// content_box_background

$GLOBALS['TL_DCA']['tl_content']['fields']['content_box_background_color'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['content_box_background_color'],
    'inputType' => 'select',
    'options' => [
        '' => '-',
        'eeee' => 'hellgrau',
        '252525' => 'grau',
        '0d5289' => 'blau',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 6,
        'default' => '',
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
        '' => '0%',
        'overlay-40' => '40%',
        'overlay-60' => '60%',
        'overlay-80' => '80%'
    ],
    'sql' => [
        'type' => 'string',
        'length' => 10,
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
        'center' => 'Zentriert',
        'right' => 'Rechts',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 6,
        'default' => '',
    ],
    'eval' => ['tl_class' => 'w50'],
];
