<?php
// composer autoload
require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
// require_once 'path/to/algolia/folder/autoload.php';

$client = Algolia\AlgoliaSearch\SearchClient::create(
'9P1CWFU25C',
'4d1cd9774579ff04e6707c61ad10f3ef'
);

$index = $client->initIndex('test_BILL');

$batch = json_decode(file_get_contents('js\products.json'), true);

$index->saveObjects($batch,
["autoGenerateObjectIDIfNotExist" => true]
);

$index->setSettings(
  [
    'searchableAttributes' => [
      'name',
      'ing',
      'price'
    ]
  ]
);

echo var_dump($index);

?>
