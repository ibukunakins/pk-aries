<?php return array (
  'application' => 
  array (
    'debug' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'mysql' => 
      array (
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'aries',
        'prefix' => 'acrpt_',
      ),
    ),
  ),
  'system' => 
  array (
    'secret' => 'hVPzCwbZ9f2tkINtz/Txanfa.NWhdm5V9DZFUBfKMFXeGtC7NBqRMacNAKr1Lyxb',
  ),
  'system/cache' => 
  array (
    'caches' => 
    array (
      'cache' => 
      array (
        'storage' => 'auto',
      ),
    ),
    'nocache' => false,
  ),
  'system/finder' => 
  array (
    'storage' => '',
  ),
  'debug' => 
  array (
    'enabled' => false,
  ),
);