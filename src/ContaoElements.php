<?php

namespace PiP\ContaoElements;

use Contao\StringUtil;
use Contao\FrontendTemplate;
use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;

class ContaoElements
{
  public function generatePageHook(PageModel $page, LayoutModel $layout, PageRegular $pageRegular)
  {
    $strScripts = '';

    if ($layout->addStimulus) {
      $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaoelements/js/stimulus.js||static';
      $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaoelements/js/main.js||static';
      $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaoelements/js/runtime.js||static';

      $arrStimulus = StringUtil::deserialize($layout->stimulus);

      foreach ($arrStimulus as $strTemplate) {
        if ($strTemplate) {
          $objTemplate = new FrontendTemplate($strTemplate);
          $strScripts .= $objTemplate->parse();
        }
      }

      $GLOBALS['TL_BODY'][] = $strScripts;
    }
  }
}
