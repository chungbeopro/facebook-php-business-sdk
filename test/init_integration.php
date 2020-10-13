<?php
/**
 
namespace FacebookAdsTest\Bootstrap;

error_reporting(E_ALL | E_STRICT);
if (!ini_get('date.timezone')) {
  ini_set('date.timezone', 'UTC');
}

require_once __DIR__.'/FacebookAdsTest/Bootstrap/Bootstrap.php';
require_once __DIR__.'/FacebookAdsTest/Bootstrap/IntegrationBootstrap.php';

$bootstrap = new IntegrationBootstrap();
$bootstrap->init();

return $bootstrap;
 */

