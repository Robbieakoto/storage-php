<?php

include __DIR__.'/../header.php';

use Supabase\Storage\StorageFile;

//Selecting an already created bucket for our test.
$bucket_id = 'test-bucket';
//Also creating file with unique ID.
$testFile = 'file'.uniqid().'.png';
//Creating our StorageFile instance to upload files.
$file = new StorageFile($api_key, $reference_id, $bucket_id);
//We will upload a test file to copy it.
$file->upload($testFile, 'https://www.shorturl.at/img/shorturl-icon.png', ['public' => false]);
//Now we will copy the file using the copy method.
$result = $file->copy($testFile, 'test-copy');
//print out result.
$output = json_decode($result->getBody(), true);
print_r($output);
//delete example files.
$file->remove(["$testFile"]);
$file->remove(['test-copy']);
