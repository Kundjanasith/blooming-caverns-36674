<?php
$access_token = 'Wn8RaZMfej8XT1pW7St5i+ygTIYeqxZPZDgn5gpx3lKzTISTkHj+7FwQbXkju0Cg2uh9VTL9N8icn1ZFudk5UNSl7SgN12wEhqDQsO6sXy2/QRFBAhjJLVJWHiXxBjHg8kUG7OWByjUcRCywqQOZVQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
