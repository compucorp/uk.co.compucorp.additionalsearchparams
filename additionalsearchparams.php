<?php

require_once 'additionalsearchparams.civix.php';
use CRM_Additionalsearchparams_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function additionalsearchparams_civicrm_config(&$config) {
  _additionalsearchparams_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function additionalsearchparams_civicrm_install() {
  _additionalsearchparams_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function additionalsearchparams_civicrm_postInstall() {
  _additionalsearchparams_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function additionalsearchparams_civicrm_uninstall() {
  _additionalsearchparams_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function additionalsearchparams_civicrm_enable() {
  _additionalsearchparams_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function additionalsearchparams_civicrm_disable() {
  _additionalsearchparams_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function additionalsearchparams_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _additionalsearchparams_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function additionalsearchparams_civicrm_entityTypes(&$entityTypes) {
  _additionalsearchparams_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_buildForm().
 */
function additionalsearchparams_civicrm_buildForm($formName, &$form) {
  $hooks = [
    new CRM_AdditionalSearchParams_Hook_BuildForm_SetBasicSearchUrlParamsAsDefault(),
  ];

  foreach ($hooks as $hook) {
    $hook->run($form, $formName);
  }
}
