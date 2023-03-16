<?php

include __DIR__.'/../header.php';
use Supabase\Storage\StorageFile;

$bucket_id = 'test-bucket';

$client = new StorageFile($api_key, $reference_id, $bucket_id, $domain, $scheme, $path);
$options = ['download' => true];
$result = $client->getPublicUrl('path/to/file.png', $options);
print_r($result);
