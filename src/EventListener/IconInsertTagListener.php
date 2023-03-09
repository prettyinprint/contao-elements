<?php

namespace PiP\ContaoElements\EventListener;

class IconInsertTagListener
{
  public const TAG = 'insert_icon';

  public function __invoke(string $tag)
  {
    [$tagName, $tagValue] = explode('::', $tag);

    if (self::TAG !== $tagName) {
      return false;
    }

    return $this->getReplacement($tagValue);
  }
  private function getReplacement(string $iconTarget)
  {
    $icons = [
      'arrowDown' => '<path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />',
      'arrowUp' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />',
      'chevronDown' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />',
      'chevronUp' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />'
    ];


    if (!array_key_exists($iconTarget, $icons)) {
      return false;
    }

    $replacement = '<svg xmlns="http://www.w3.org/2000/svg" class="icon">';
    $replacement .= $icons['arrowDown'];
    $replacement .= '</svg>';

    return $replacement;
  }
}
