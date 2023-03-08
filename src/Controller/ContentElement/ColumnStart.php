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
 * @ContentElement("column_start", category="grid")
 */
class ColumnStart extends AbstractContentElementController
{
  protected function getResponse(Template $template, ContentModel $model, Request $request): Response
  {
    if ($this->container->get('contao.routing.scope_matcher')->isBackendRequest($request)) {
      $template = new BackendTemplate('be_wildcard');
      return $template->getResponse();
    }

    $template->cssID = StringUtil::deserialize($model->cssID)[0];
    $template->class = StringUtil::deserialize($model->cssID)[1];

    $template->columnStart = $model->column_properties_col_start;
    $template->columnEnd = $model->column_properties_col_end;

    $columnStartBreakpoints = join(' ', array_filter(StringUtil::deserialize($model->column_properties_col_start_breakpoints, 'strlen')));
    $columnEndBreakpoints = join(' ', array_filter(StringUtil::deserialize($model->column_properties_col_end_breakpoints, 'strlen')));
    $alignItems = join(' ', array_filter(StringUtil::deserialize($model->column_content_properties_align_items, 'strlen')));
    $justifyContent = join(' ', array_filter(StringUtil::deserialize($model->column_content_properties_justify_content, 'strlen')));
    $textAlign = join(' ', array_filter(StringUtil::deserialize($model->column_content_properties_text_align, 'strlen')));

    $template->classes = $columnStartBreakpoints . ' ' . $columnEndBreakpoints . ' ' . $alignItems . ' ' . $justifyContent . ' ' . $textAlign;

    return $template->getResponse();
  }
}
