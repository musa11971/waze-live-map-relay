<?php

$errors = [];

if(!isset($_GET['to']) && !isset($_GET['key']))
    return;

// Get user input
$to = urlencode($_GET['to']);
$key = urlencode($_GET['key']);

// Make API request
$response = @file_get_contents('http://api.positionstack.com/v1/forward?access_key=' . $key . '&query=' . $to);

if($response === false) {
    $errors[] = 'API request failed.';
    return;
}

$data = json_decode($response);

// Location data not found
if(count($data->data) < 1) {
    $errors[] = 'Location not found.';
    return;
}

// Get the first location
$result = $data->data[0];

// Create the redirect URL
$redirectURL = 'https://www.waze.com/nl/live-map/directions?to=ll.' . $result->latitude . '%2C' . $result->longitude;

header('Location: ' . $redirectURL);
die;
