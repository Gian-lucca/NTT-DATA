<?php

$databases['default']['default'] = [
  'database' => 'drupal10',
  'username' => 'drupal10',
  'password' => 'drupal10',
  'host' => getenv('LANDO_DATABASE_HOST') ?: 'database',
  'driver' => 'mysql',
  'port' => getenv('LANDO_DATABASE_PORT') ?: '3306',
];

$settings['trusted_host_patterns'] = [
  '^.+\.lndo\.site$',
  '^localhost$',
];

$settings['file_public_path'] = 'sites/default/files';
