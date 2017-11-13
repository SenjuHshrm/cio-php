<?php
  session_start();
  header('Content-type: application/json');
  $res = new stdClass();
  if(isset($_SESSION['id'])){
    $res->session = true;
  }
  else{
    $res->session = false;
  }
  echo json_encode($res);
?>
