<?php
  include($_SERVER['DOCUMENT_ROOT'].'/config/auth.php');
  header('Content-Type: application/json');
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  $adminUser = $jsonData->LoginUser;
  $adminPass = md5($jsonData->LoginPass);
  $id = md5($jsonData->LoginUser.$jsonData->LoginPass);
  $resObj = new stdClass();

  if($jsonData->userType == "admin"){
    $resObj->message = LoginAuth("admin_acct", "admin_acct_info", "Admin", $id);
  }
  else if($jsonData->userType == "emply"){
    $resObj->message = LoginAuth("emp_acct", "emp_acct_info", "Employee", $id);
  }
  else{
    $resObj->message = LoginAuth("walk_acct", "walk_acct_info", "WalkIn", $id);
  }
  echo(json_encode($resObj));
?>
