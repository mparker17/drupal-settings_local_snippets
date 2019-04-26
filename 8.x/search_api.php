<?php

// Search API.
// Not officially recommended, see
// https://drunkenmonkey.at/blog/config_entity_overrides
// ... but will work in a pinch.
$config['search_api.server_machine_name.solr'] = [
  'backend_config' => [
    'connector_config' => [
      'host' => 'hostname',
      'path' => '/solr',
      'core' => 'collection1',
      'port' => '8983',
    ],
  ],
];
