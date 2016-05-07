<?php
/**
 * @file
 * Entity scope.
 */
namespace Drupal\DrupalExtension\Hook\Scope;

/**
 * Represents an Entity hook scope.
 */
final class BeforeEntityCreateScope extends EntityScope {

  /**
   * Return the scope name.
   *
   * @return string
   */
  public function getName() {
    return self::BEFORE;
  }

}
