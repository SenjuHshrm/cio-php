<?php
  include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
  header('Content-Type: application/json');
  session_start();
  $captcha_num = '0123456789ABCDEF';
  $captcha_num = substr(str_shuffle($captcha_num), 0, 6);
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  //declare new properties for obj to be send back to angular $http service
  $jsonData->RefNum = $captcha_num;
  $jsonData->ReqType = 'Birth';
  //extract props from obj
  $ReqName = $jsonData->ReqName;
  $ReqMid = $jsonData->ReqMid;
  $ReqLast = $jsonData->ReqLast;
  $bName = $jsonData->rBName;
  $bMid = $jsonData->rBMid;
  $bLast = $jsonData->rBLast;
  $bDate = $jsonData->bDate;

  $sql = "INSERT INTO lcr_reqr(ReqName,ReqMid,ReqLast,id)VALUES('$ReqName','$ReqMid','$ReqLast','$captcha_num');";
  $sql .= "INSERT INTO lcr_birth(id,bName,bMid,bLast,bDate)VALUES('$captcha_num','$bName','$bMid','$bLast','$bDate');";
  if(mysqli_multi_query($conn,$sql)){
    $jsonData->message = 'Data Sent';
  } else{
    $jsonData->message = 'An error occured while sending data';
  }
  mysqli_close($conn);
  echo(json_encode($jsonData));
?>
