<?php
/**
 * bootstrap Drupal 
 * For local instance, apachesolr module is the minimum module that we need
 @ todo: acquia environment
 */
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path);
define('DRUPAL_ROOT', $path);
require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
//require_once './includes/common.inc';
//require_once './includes/module.inc';
//drupal_load('module', 'node');
//module_invoke('node', 'boot');
//drupal_load('module', 'apachesolr');
//module_invoke('apachesolr', 'boot');