<?php

use Contao\Controller;

$GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'][] = 'addStimulus';
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('addMooTools;', 'addMooTools;{stimulus_legend:hide},addStimulus;', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addStimulus'] = 'stimulus';


$GLOBALS['TL_DCA']['tl_layout']['fields']['addStimulus'] = [
  'inputType'               => 'checkbox',
  'eval'                    => array('submitOnChange' => true),
  'sql'                     => array('type' => 'boolean', 'default' => false)
];
$GLOBALS['TL_DCA']['tl_layout']['fields']['stimulus'] = [
  'filter'                  => true,
  'search'                  => true,
  'inputType'               => 'checkboxWizard',
  'options_callback' => static function () {
    return Controller::getTemplateGroup('stim_');
  },
  'eval'                    => array('multiple' => true),
  'sql'                     => "text NULL"
];
