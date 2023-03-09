<?php


namespace PiP\ContaoElements\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @Hook("replaceInsertTags")
 */
class IconInsertTagListener
{
  public const TAG = 'rot13';

  public function __invoke(string $tag)
  {
    [$tagName, $tagValue] = explode('::', $tag);

    if (self::TAG !== $tagName) {
      return false;
    }

    return str_rot13($tagValue);
  }
}
