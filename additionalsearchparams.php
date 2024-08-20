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
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function additionalsearchparams_civicrm_enable() {
  _additionalsearchparams_civix_civicrm_enable();
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
