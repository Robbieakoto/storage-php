<?php

include __DIR__.'/../header.php';
use Supabase\Storage\StorageFile;

$bucket_id = 'test-bucket';

$client = new StorageFile($api_key, $reference_id, $bucket_id, $domain, $scheme, $path);
$options = ['public' => false];
$result = $client->upload('path/to/file.png', 'https://www.shorturl.at/img/shorturl-icon.png', $options);
$output = json_decode($result->getBody(), true);
print_r($output);
