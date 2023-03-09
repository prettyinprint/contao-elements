<?php

$GLOBALS['TL_CSS'][] = 'bundles/contaoelements/css/grid.css||static';
$GLOBALS['TL_CSS'][] = 'bundles/contaoelements/css/contentBox.css||static';

$GLOBALS['TL_HOOKS']['generatePage'][] = ['PiP\\ContaoElements\\ContaoElements', 'generatePageHook'];
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['PiP\\ContaoElements\\EventListener\\IconInsertTagListener', '__invoke'];

$GLOBALS['TL_WRAPPERS']['start'][] = 'content_box_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'content_box_stop';
$GLOBALS['TL_WRAPPERS']['start'][] = 'grid_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'grid_stop';
$GLOBALS['TL_WRAPPERS']['start'][] = 'column_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'column_stop';
