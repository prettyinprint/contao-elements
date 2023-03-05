<?php

namespace PiP\ContaoElements\Controller\ContentElement;

use Contao\ContentModel;
use Contao\BackendTemplate;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Contao\FilesModel;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @ContentElement("content_box_start", category="content_box")
 */
class ContentBoxStart extends AbstractContentElementController
{
  protected function getResponse(Template $template, ContentModel $model, Request $request): Response
  {
    if ($this->container->get('contao.routing.scope_matcher')->isBackendRequest($request)) {
      $template = new BackendTemplate('be_wildcard');
      return $template->getResponse();
    }

    $template->cssID = StringUtil::deserialize($model->cssID)[0];
    $template->class = StringUtil::deserialize($model->cssID)[1];

    $template->width = $model->content_box_properties_width;
    $template->paddingTop = $model->content_box_properties_pt;
    $template->paddingBottom = $model->content_box_properties_pb;
    $template->marginTop = $model->content_box_properties_mt;
    $template->marginBottom = $model->content_box_properties_mb;

    $template->backgroundColor = $model->content_box_background_color_custom ?: $model->content_box_background_color;
    $template->hasBackgroundImage = $model->addContentBoxImage;
    $template->backgroundImagePath = null;
    $template->backgroundImageTitle = null;
    $template->backgroundParallax = $model->content_box_background_parallax;
    $template->backgroundOverlay = $model->content_box_background_overlay;

    $template->colorInverted = $model->content_box_content_color_inverted;
    $template->textAlign = $model->content_box_content_text_align;

    if ($template->hasBackgroundImage) {
      $file = FilesModel::findByUuid($model->singleSRC);
      $metaArray = StringUtil::deserialize($file->meta);

      $template->backgroundImagePath = $file->path;
      $template->backgroundImageTitle = $metaArray[$GLOBALS['TL_LANGUAGE']]['title'];
    }

    return $template->getResponse();
  }
}
