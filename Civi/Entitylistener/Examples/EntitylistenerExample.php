<?php

namespace Civi\Entitylistener\Examples;

use Civi\Entitylistener\Source\EntityListener;
use Civi\Entitylistener\Source\EntitylistenerManager;

class EntitylistenerExample {

  public static function run() {
    Entitylistener::create()
      ->setHookName('hook_civicrm_pre')

      // optional, default is 0
      ->setHookWeight(1)

      // optional, default is function which always return true
      ->setFilterHookFunction(function ($hook) {
        if ($hook->entity == 'Activity' && $hook->action == 'create') {
          return true;
        }

        return false;
      })

      // this code will be listened
      // this function will be executed when call 'start' method
      ->setListenFunction(function () {
        civicrm_api3('Activity', 'create', [
          'activity_type_id' => "Meeting",
          'details' => 'Entitylistener Example Activity One',
        ]);

        civicrm_api3('Activity', 'create', [
          'activity_type_id' => "Meeting",
          'details' => 'Entitylistener Example Activity One',
        ]);

        civicrm_api3('Activity', 'create', [
          'activity_type_id' => "Meeting",
          'details' => 'Entitylistener Example Activity Two',
        ]);
      })

      // this function will be executed when listening is finished 'start' method
      ->setPostListenFunction(function ($hookDataItems) {
        // do custom code to handle data
        echo '<pre>';
        var_dump($hookDataItems);
        echo '</pre>';
        exit();
      })

      // start listening
      // execute 'listen function'
      ->start();
  }

  public function pseudoCode() {//TODO: remove or implement

//    $entitylistener = EntitylistenerManager::createEntitylistener('name_of_listener');
//    $entitylistener->setHookName('hook_civicrm_pre')
//      ->setHookWeight(1)
//      ->setFilterHookFunction(function ($hook) {
//        if ($hook->entity == 'Activity' && $hook->action == 'create') {
//          return true;
//        }
//
//        return false;
//      })
//      ->setPostListenFunction(function ($hookDataItems) {
//        // do custom code to handle data
//        echo '<pre>';
//        var_dump($hookDataItems);
//        echo '</pre>';
//        exit();
//      });

//    $entitylistener = EntitylistenerManager::getEntitylistener('name_of_listener');
//    $entitylistener->startListen();
//
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//    //code, which will be listened
//
//    $entitylistener = EntitylistenerManager::getEntitylistener('name_of_listener');
//    $entitylistener->stopListen();
  }

}
