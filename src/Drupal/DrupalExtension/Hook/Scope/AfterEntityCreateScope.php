<?php
/**
 * @file
 * Entity scope.
 */
namespace Drupal\DrupalExtension\Hook\Scope;

/**
 * Represents an Entity hook scope.
 */
final class AfterEntityCreateScope extends EntityScope {

  /**
   * Return the scope name.
   *
   * @return string
   */
  public function getName() {
    return self::AFTER;
  }

}
