<?php
  header('Content-Type: application/json');
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  $adminUser = $jsonData->adminUser;
  $adminPass = md5($jsonData->adminPass);
  $conn = mysqli_connect('localhost','CIO_DB','m2losdq4','cio_spc');
  $dbUser = $conn->query("SELECT `admin_username` FROM `admin_acct`;");
  $dbPass = $conn->query("SELECT `admin_password` FROM `admin_acct`;");
  $FNameData = $conn->query("SELECT `Fname` FROM `admin_acct_info`;");
  $MNameData = $conn->query("SELECT `Mname` FROM `admin_acct_info`;");
  $LNameData = $conn->query("SELECT `Lname` FROM `admin_acct_info`;");
  $FNameDB = mysqli_fetch_array($FNameData);
  $MNameDB = mysqli_fetch_array($MNameData);
  $LNameDB = mysqli_fetch_array($LNameData);
  $userVal = mysqli_fetch_array($dbUser);
  $passVal = mysqli_fetch_array($dbPass);
  if(($userVal[0]==$adminUser)&&($passVal[0]==$adminPass)){
    session_start();
    $_SESSION['login'] = $FNameDB[0].' '.substr($MNameDB[0],0,1).'. '.$LNameDB[0];
    $jsonData->message = 'success';
  }
  else if(($userVal[0]!=$adminUser)&&($passVal[0]==$adminPass)){
    $jsonData->message = 'Username doesn\'t exist';
  }
  else if(($userVal[0]==$adminUser)&&($passVal[0]!=$adminPass)){
    $jsonData->message = 'Wrong password';
  }
  else{
    $jsonData->message = 'Account not registered';
  }
  mysqli_close($conn);
  echo(json_encode($jsonData));
?>
