<?php
  session_start();
  header('Content-type: application/json');
  $res = new stdClass();
  if(isset($_SESSION['id'])){
    $res->session = true;
    $res->user = $_SESSION['userType'];
    $res->name = $_SESSION['login'];
  }
  else{
    $res->session = false;
  }
  echo json_encode($res);
?>
