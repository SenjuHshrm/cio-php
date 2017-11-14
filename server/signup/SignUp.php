<?php
  include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
  include($_SERVER['DOCUMENT_ROOT'].'/config/auth.php');
  header('Content-Type: application/json');
  session_start();
  $xobj = file_get_contents('php://input');
  $xobjParse = json_decode($xobj);
  $resData = new stdClass();
  //extract properties from obj
  $username = $xobjParse->username;
  $password = md5($xobjParse->password);
  $authpass = md5($xobjParse->authpass);
  $birthday = $xobjParse->birthday;
  $birthday = date('Y-m-d', strtotime(str_replace('-','/', $birthday)));
  $xobjParse->birthday = $birthday;
  //create unique id
  $xobjParse->id = md5($username.$xobjParse->password);
  //set default for $pic
  if($xobjParse->gender=='male'){
    $xobjParse->pic = '/public/imgs/default/def_prof_male.png';
  }
  else{
    $xobjParse->pic = '/public/imgs/default/def_prof_female.jpg';
  }
  //compare $password and $authpass
  if($password != $authpass){
    $resData->msg = 'Password mismatch.';
    $resData->type = 'danger';
  }
  else{
    if($xobjParse->userType == 'emply'){
      $resData = SignUp($xobjParse,"emp_acct", "emp_acct_info");
    }
    else{
      $resData = SignUp($xobjParse,"walk_acct", "walk_acct_info");
    }
  }
  echo(json_encode($resData));
?>
