<?php
  header('Content-Type: application/json');
  include($_SERVER['DOCUMENT_ROOT'].'/config/auth.php');
  session_start();
  $xobj = new stdClass();
  if(!isset($_SESSION['id'])){
    $xobj->session = 'No session';
  }
  else{
    if($_SESSION['userType'] == 'Admin'){
      $xobj = GetProfile('admin_tbl',$_SESSION['id']);
    }
    else if($_SESSION['userType'] == 'Employee'){
      $xobj = GetProfile('emp_tbl',$_SESSION['id']);
    }
    else{
      $xobj = GetProfile('walkin_tbl',$_SESSION['id']);
    }
  }
  echo json_encode($xobj);
?>
