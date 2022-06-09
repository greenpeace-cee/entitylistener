<?php

namespace Civi\Entitylistener\Source;

use Civi;
use Closure;

abstract class EntityListenerBase {

  /**
   * @var string
   */
  protected string $hookName;

  /**
   * @var int
   */
  protected int $hookWeight;

  /**
   * @var array
   */
  protected array $hookData;

  /**
   * @var Closure
   */
  protected Closure $filterHookFunction;

  /**
   * @var Closure
   */
  protected Closure $postListenFunction;

  /**
   * @var Closure
   */
  protected Closure $listenFunction;

  protected function __construct() {
    $this->reset();
  }

  protected function reset() {
    $this->hookName = '';
    $this->hookWeight = 0;
    $this->hookData = [];
    $this->filterHookFunction = function () { return true; };
    $this->postListenFunction = function () {};
    $this->listenFunction = function () {};
  }

  /**
   * @param string $hookName
   * @return EntityListenerBase
   */
  public function setHookName(string $hookName): EntityListenerBase {
    $this->hookName = $hookName;

    return $this;
  }

  /**
   * @param int $hookWeight
   * @return EntityListenerBase
   */
  public function setHookWeight(int $hookWeight): EntityListenerBase {
    $this->hookWeight = $hookWeight;

    return $this;
  }

  /**
   * @param Closure $filterHookFunction
   * @return EntityListenerBase
   */
  public function setFilterHookFunction(Closure $filterHookFunction): EntityListenerBase {
    $this->filterHookFunction = $filterHookFunction;

    return $this;
  }

  /**
   * @param Closure $postListenFunction
   * @return EntityListenerBase
   */
  public function setPostListenFunction(Closure $postListenFunction): EntityListenerBase {
    $this->postListenFunction = $postListenFunction;

    return $this;
  }

  /**
   * @param Closure $listenFunction
   * @return EntityListenerBase
   */
  public function setListenFunction(Closure $listenFunction): EntityListenerBase {
    $this->listenFunction = $listenFunction;

    return $this;
  }

}
