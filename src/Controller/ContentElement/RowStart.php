<?php

namespace PiP\ContaoElements\Controller\ContentElement;

use Contao\ContentModel;
use Contao\BackendTemplate;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @ContentElement("row_start", category="grid")
 */
class RowStart extends AbstractContentElementController
{
  protected function getResponse(Template $template, ContentModel $model, Request $request): Response
  {
    if ($this->container->get('contao.routing.scope_matcher')->isBackendRequest($request)) {
      $template = new BackendTemplate('be_wildcard');
      return $template->getResponse();
    }

    $template->cssID = StringUtil::deserialize($model->cssID)[0];
    $template->class = StringUtil::deserialize($model->cssID)[1];

    return $template->getResponse();
  }
}
