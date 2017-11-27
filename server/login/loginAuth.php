<?php
  include($_SERVER['DOCUMENT_ROOT'].'/config/auth.php');
  header('Content-Type: application/json');
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  $username = $jsonData->LoginUser;
  $password = md5($jsonData->LoginPass);
  $id = md5($username.$password);
  $resObj = new stdClass();

  if($jsonData->userType == "admin"){
    $resObj = LoginAuth("admin_tbl", $id, "Admin");
  }
  else if($jsonData->userType == "emply"){
    $resObj = LoginAuth("emp_tbl", $id, "Employee");
  }
  else{
    $resObj->message = LoginAuth("walkin_tbl", "WalkIn", $id);
  }
  echo json_encode($resObj);
?>
