<?php

namespace Civi\Entitylistener\Source;

use Civi;
use Closure;
use Exception;

class EntityListener extends EntityListenerBase {

  public static function create(): EntityListener {
    return new EntityListener();
  }

  /**
   * @throws Exception
   */
  public function start() {
    $this->validate();
    $this->startListen();
    $this->listenFunction->call($this);
    $this->postListenFunction->call($this, $this->hookData);
    $this->stopListen();
  }

  protected function startListen() {
    Civi::dispatcher()->addListener($this->hookName, $this->getHookCallbackFunction(), $this->hookWeight);
  }

  protected function stopListen() {
    Civi::dispatcher()->removeListener($this->hookName, $this->getHookCallbackFunction());
  }

  public function __destruct() {
    $this->stopListen();
  }

  protected function getHookCallbackFunction(): Closure {
    return  function ($hookData) {
      if ($this->filterHookFunction->call($this, $hookData)) {
        $this->hookData[] = $hookData;
      }
    };
  }

  /**
   * @throws Exception
   */
  protected function validate() {
    if (empty($this->hookName)) {
      throw new Exception('hookName is required. You can set it by "setHookName" method.',1);
    }

    if (empty($this->listenFunction)) {
      throw new Exception('listenFunction is required. You can set it by "setListenFunction" method.',2);
    }
    if (empty($this->postListenFunction)) {
      throw new Exception('postListenFunction is required. You can set it by "setPostListenFunction" method.',3);
    }
  }

}
