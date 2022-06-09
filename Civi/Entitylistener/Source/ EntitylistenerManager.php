<?php

namespace Civi\Entitylistener\Source;

use Civi;
use Exception;

//TODO: Do we need this manager?

class  EntitylistenerManager {

  /**
   * The EntityListener instances
   */
  protected static array $instances = [];

  /**
   * @param $name
   * @return EntityListener|null
   */
  public static function getEntitylistener($name): ?EntityListener {
    if (!isset(self::$instances[$name])) {
      return null;
    }

    return self::$instances[$name];
  }

  /**
   * @param $name
   * @return EntityListener
   */
  public static function createEntitylistener($name): EntityListener {
    if (isset(self::$instances[$name])) {
      throw new Exception('Instance of EntityListener already exist. Name: ' . $name);
    }

    self::$instances[$name] = EntityListener::create();

    return self::getEntitylistener($name);
  }

  private function __construct() {}
  protected function __clone() {}
  protected function __wakeup(){}

}
