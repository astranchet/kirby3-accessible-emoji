<?php

/**
 * Kirby 3 KirbyTag - Accessible emoji
 *
 * @version   0.0.1
 * @link      https://github.com/mlbiche/kirby3-accessible-emoji
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
