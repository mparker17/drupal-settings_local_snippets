<?php

// Search API Override module.
$conf['search_api_override_mode'] = 'load';
$conf['search_api_override_servers']['server_machine_name']['options'] = array(
  'host' => 'hostname',
  'port' => '8080',
  'path' => 'solr/collection1',
);
