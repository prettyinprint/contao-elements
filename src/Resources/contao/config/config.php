<?php

$GLOBALS['TL_CSS'][] = 'bundles/contaoelements/css/grid.css||static';
$GLOBALS['TL_CSS'][] = 'bundles/contaoelements/css/contentBox.css||static';

$GLOBALS['TL_HOOKS']['generatePage'][] = ['PiP\\ContaoElements\\ContaoElements', 'generatePageHook'];

$GLOBALS['TL_WRAPPERS']['start'][] = 'content_box_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'content_box_stop';
$GLOBALS['TL_WRAPPERS']['start'][] = 'row_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'row_stop';
