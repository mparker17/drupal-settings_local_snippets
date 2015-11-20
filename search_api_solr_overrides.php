<?php

// Search API Solr Overrides module.
$conf['search_api_solr_overrides']['server_machine_name'] = array(
  'name' => t('Solr Server (Overridden)'),
  'options' => array(
    'host' => 'hostname',
    'port' => 8983,
    'path' => '/solr/collection1',
  ),
);
