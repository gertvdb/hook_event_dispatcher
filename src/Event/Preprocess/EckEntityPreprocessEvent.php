<?php

namespace Drupal\hook_event_dispatcher\Event\Preprocess;

/**
 * Class EckEntityPreprocessEvent.
 */
final class EckEntityPreprocessEvent extends AbstractPreprocessEvent {

  /**
   * {@inheritdoc}
   */
  public static function getHook() {
    return 'eck_entity';
  }

}
