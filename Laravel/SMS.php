<?php

function send_sms() {

  $message = 'Hello world';

  $apiKey = '9052ffc3af735e96';
  $secretKey = 'fc6d355e';
  $callerId = '8809612770480';

  $numbers = ['01781077277', '01919585035'];
  $numbers = array_map(fn($i) => '88'.$i, $numbers);

  $toUser = implode('+', $numbers);


  $url = "http://188.138.41.146:7788/sendtext?apikey={$apiKey}&secretkey={$secretKey}&callerID={$callerId}&toUser={$toUser}&messageContent={$message}";
  $url = str_replace(' ', '%20', $url);
  return $url;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}

$res = send_sms();

echo $res;

// https://msg.elitbuzz-bd.com/smsapi?api_key=(R600149762e1387907dec5.24342983)&type=text&contacts=(8801781077277)&senderid=(eSMS)&msg=("Hello world")

// http://188.138.41.146:7788/sendtext?apikey=9052ffc3af735e96&secretkey=fc6d355e&callerID=speeddigi&toUser=8801781077277&messageContent="Hello"