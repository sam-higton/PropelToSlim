<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('bookstore', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'dsn' => 'mysql:host=localhost;dbname=propeltoslim_example',
  'user' => 'root',
  'password' => 'password',
  'attributes' =>
  array (
    'ATTR_EMULATE_PREPARES' => false,
  ),
  'classname' => '\\Propel\\Runtime\\Connection\\ConnectionWrapper',
));
$manager->setName('bookstore');
$serviceContainer->setConnectionManager('bookstore', $manager);
$serviceContainer->setDefaultDatasource('bookstore');