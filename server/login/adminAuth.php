<?php
  include(dirname(__FILE__).'/../config.php');
  header('Content-Type: application/json');
  $resData = file_get_contents('php://input');
  $jsonData = json_decode($resData);
  $adminUser = $jsonData->adminUser;
  $adminPass = md5($jsonData->adminPass);
  $id = md5($adminUser.$adminPass);
  $dbUser = $conn->query("SELECT `admin_username` FROM `admin_acct` WHERE `id`='$id';");
  $dbPass = $conn->query("SELECT `admin_password` FROM `admin_acct` WHERE `id`='$id';");
  $userVal = mysqli_fetch_array($dbUser);
  $passVal = mysqli_fetch_array($dbPass);
  if(($userVal[0]==$adminUser)&&($passVal[0]==$adminPass)){
    session_start();
    $fnameQuery = $conn->query("SELECT `Fname` FROM `admin_acct_info` WHERE `id`='$id';");
    $mnameQuery = $conn->query("SELECT `Mname` FROM `admin_acct_info` WHERE `id`='$id';");
    $lnameQuery = $conn->query("SELECT `Lname` FROM `admin_acct_info` WHERE `id`='$id';");
    $picQuery = $conn->query("SELECT `pic` FROM `admin_acct_info` WHERE `id`='$id';");

    $fname = mysqli_fetch_array($fnameQuery);
    $mname = mysqli_fetch_array($mnameQuery);
    $lname = mysqli_fetch_array($lnameQuery);
    $pic = mysqli_fetch_array($picQuery);

    $_SESSION['login'] = $fname[0]." ".substr($mname[0],0,1).". ".$lname[0];
    $_SESSION['pic'] = $pic[0];
    $_SESSION['userType'] = 'Admin';
    $_SESSION['id'] = $id;
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
