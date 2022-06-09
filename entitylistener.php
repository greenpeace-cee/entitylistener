<?php

require_once 'entitylistener.civix.php';
// phpcs:disable
use CRM_Entitylistener_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function entitylistener_civicrm_config(&$config) {
  _entitylistener_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function entitylistener_civicrm_xmlMenu(&$files) {
  _entitylistener_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function entitylistener_civicrm_install() {
  _entitylistener_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function entitylistener_civicrm_postInstall() {
  _entitylistener_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function entitylistener_civicrm_uninstall() {
  _entitylistener_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function entitylistener_civicrm_enable() {
  _entitylistener_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function entitylistener_civicrm_disable() {
  _entitylistener_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function entitylistener_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _entitylistener_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function entitylistener_civicrm_managed(&$entities) {
  _entitylistener_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Add CiviCase types provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function entitylistener_civicrm_caseTypes(&$caseTypes) {
  _entitylistener_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Add Angular modules provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function entitylistener_civicrm_angularModules(&$angularModules) {
  // Auto-add module files from ./ang/*.ang.php
  _entitylistener_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function entitylistener_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _entitylistener_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function entitylistener_civicrm_entityTypes(&$entityTypes) {
  _entitylistener_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function entitylistener_civicrm_themes(&$themes) {
  _entitylistener_civix_civicrm_themes($themes);
}

//TODO: Update LICENSE.txt email and name
//TODO: Update info.xml
//TODO: Update readme


//function entitylistener_civicrm_buildForm($formName, &$form)//////////////remove!!!
//{
//  if ($formName == 'CRM_Contact_Form_Contact') {
//    EntitylistenerExample::run();
//  }
//
//}