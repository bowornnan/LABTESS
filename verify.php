<?php 
  $access_token = 'XXXXXXXXXXXXXXXXXXXXXXX';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . A4ZgJxKy1GBgi6Tqybs9bzsiq7eDPQTlQg9RPGJbOFv7D7St1WWe4Ic+X/kzUu+RnD5YamgaXXwgUAvIoP2Fmuj5zPgvjfidZu9vRbBcleAzkbkhF5qQ5cCB+93J+plLQa4RotF0xxqNt0FVFL7GsgdB04t89/1O/w1cDnyilFU=);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
