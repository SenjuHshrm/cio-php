<?php
  header('Content-Type: application/json');
  session_start();
  $captcha_num = '0123456789ABCDEF';
  $captcha_num = substr(str_shuffle($captcha_num), 0, 6);
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  //declare new properties for obj to be send back to angular $http service
  $jsonData->RefNum = $captcha_num;
  $jsonData->ReqType = 'Marriage';
  //extract props from obj
  $ReqName = $jsonData->ReqName;
  $ReqMid = $jsonData->ReqMid;
  $ReqLast = $jsonData->ReqLast;
  $mName = $jsonData->rMName;
  $mMid = $jsonData->rMMid;
  $mLast = $jsonData->rMLast;
  $mDate = $jsonData->mDate;

  $conn = mysqli_connect('localhost','CIO_DB','m2losdq4','cio_spc');
  $sql = "INSERT INTO lcr_reqr(ReqName,ReqMid,ReqLast,id)VALUES('$ReqName','$ReqMid','$ReqLast','$captcha_num');";
  $sql .= "INSERT INTO lcr_marr(id,mName,mMid,mLast,mDate)VALUES('$captcha_num','$mName','$mMid','$mLast','$mDate');";
  if(mysqli_multi_query($conn,$sql)){
    $jsonData->message = 'Data Sent';
  } else{
    $jsonData->message = 'An error occured while sending data';
  }
  mysqli_close($conn);
  echo(json_encode($jsonData));
?>
