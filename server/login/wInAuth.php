<?php
  header('Content-Type: application/json');
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  $adminUser = $jsonData->wInUser;
  $adminPass = md5($jsonData->wInPass);
  $conn = mysqli_connect('localhost','CIO_DB','m2losdq4','cio_spc');
  $dbUser = $conn->query("SELECT `username` FROM `walk_acct`;");
  $dbPass = $conn->query("SELECT `password` FROM `walk_acct`;");
  $FNameData = $conn->query("SELECT `Fname` FROM `walk_acct_info`;");
  $MNameData = $conn->query("SELECT `Mname` FROM `walk_acct_info`;");
  $LNameData = $conn->query("SELECT `Lname` FROM `walk_acct_info`;");
  $pic = $conn->query("SELECT `pic` FROM `walk_acct_info`;");
  $FNameDB = mysqli_fetch_array($FNameData);
  $MNameDB = mysqli_fetch_array($MNameData);
  $LNameDB = mysqli_fetch_array($LNameData);
  $userVal = mysqli_fetch_array($dbUser);
  $passVal = mysqli_fetch_array($dbPass);
  $picVal = mysqli_fetch_array($pic);
  if(($userVal[0]==$adminUser)&&($passVal[0]==$adminPass)){
    session_start();
    $_SESSION['login'] = $FNameDB[0].' '.substr($MNameDB[0],0,1).'. '.$LNameDB[0];
    $_SESSION['pic'] = $picVal[0];
    $_SESSION['userType'] = 'Walk in';
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
