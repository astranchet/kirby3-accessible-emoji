<?php

/**
 * Kirby 3 KirbyTag - Accessible emoji
 *
 * @version   0.0.1
 * @link      https://github.com/astranchet/kirby3-accessible-emoji
 * @author    Anne-Sophie Tranchet <as.tranchet@gmail.com>
 * @copyright Anne-Sophie Tranchet <as.tranchet@gmail.com>
 * @license   MIT
 */

Kirby::plugin('astranchet/accessible-emoji', [
  'tags' => [
    'emoji' => [
      'html' => function ($tag) {
        return Html::tag(
          'span',
          $tag->value,
          [
            'aria-hidden' => 'true',
          ],
        );
      }
    ]
  ]
]);
