<?php
  header('Content-Type: application/json');
  session_start();
  $captcha_num = '1234567890';
  $captcha_num = substr(str_shuffle($captcha_num), 0, 6);
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  $jsonData->RefNum = $captcha_num;
  $jsonData->ReqType = 'Marriage';
  echo(json_encode($jsonData));
?>
