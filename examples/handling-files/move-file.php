<?php

include '../../vendor/autoload.php';

use Supabase\Storage\StorageFile;

$api_key = '<your_api_key>';
$supabase_id = '<your_supabase_id>';
$bucket_id = 'test-bucket';
$authHeader = ['Authorization' => "Bearer {$api_key}"];
$client = new StorageFile(
	"https://{$supabase_id}.supabase.co/storage/v1",
	$authHeader,
	$bucket_id
);

$result = $client->move('path/to/file.png', 'to/new-path/file.png');
print_r($result);
