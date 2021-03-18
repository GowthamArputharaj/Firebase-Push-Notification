<?php

// save api key in separate file with $apiKey
@include('./apikey.php');

$fields = [
    'to' => $_REQUEST['to'],
    'notification' => $_REQUEST['data'],
];

$url = 'https://fcm.googleapis.com/fcm/send';
$headers = [
    "Authorization: key=$apiKey",
    "Content-Type: application/json"
];

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($fields));

$result = curl_exec($curl);
curl_close($curl);

return json_decode($result, true);


// CURL REQUEST MODEL
// curl -X POST -H "Authorization: key=<Server Key>" \
//    -H "Content-Type: application/json" \
//    -d '{
//   "data": {
//     "notification": {
//         "title": "FCM Message",
//         "body": "This is an FCM Message",
//         "icon": "/itwonders-web-logo.png",
//     }
//   },
//   "to": "<DEVICE_REGISTRATION_TOKEN>"
// }' https://fcm.googleapis.com/fcm/send


?>