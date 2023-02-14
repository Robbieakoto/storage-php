<?php

include '../vendor/autoload.php';

use Supabase\Storage\StorageClient;

$authHeader = ['Authorization' => 'Bearer ' . 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImdwZGVmdnN4YW1uc2NjZWNjY3p1Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTY3MDAwOTgxNCwiZXhwIjoxOTg1NTg1ODE0fQ.kZKF_5HedaYHIi4aL77r2PJa5LGeyGlvVnL-tKstycc'];
$bucket_id = 'test-bucket';
$client = new  StorageClient(
	'https://' . 'gpdefvsxamnscceccczu' . '.supabase.co/storage/v1',
	$authHeader
);

function createBucket(): void
{
	global $client;
	$result = $client->createBucket('test-bucket-3');
	print_r($result);
}

function getBucket(): void
{
	global $client;
	$result = $client->getBucket('test-bucket-2');
	print_r($result);
}

function listBuckets(): void
{
	global $client;
	$result = $client->listBuckets();
	print_r($result);
	foreach ($result as $bucket) {
		print_r($bucket->name);
	}	
}

function updateBucket(): void
{
	global $client;
	$result = $client->updateBucket('test-bucket-3', ['public' => true]);
	print_r($result);
}

function deleteBucket(): void
{
	global $client;
	$result = $client->deleteBucket('test-bucket-3');
	print_r($result);
}

function emptyBucket(): void
{
	global $client;
	$result = $client->emptyBucket('test-bucket-2');
	print_r($result);
}