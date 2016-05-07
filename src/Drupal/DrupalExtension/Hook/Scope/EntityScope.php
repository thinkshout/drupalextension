<?php
/**
 * @file
 * Entity scope.
 */
namespace Drupal\DrupalExtension\Hook\Scope;

use Behat\Behat\Context\Context;
use Behat\Testwork\Hook\Scope\HookScope;

/**
 * Represents an Entity hook scope.
 */
abstract class EntityScope extends BaseEntityScope {

  const BEFORE = 'entity.create.before';
  const AFTER = 'entity.create.after';

}
