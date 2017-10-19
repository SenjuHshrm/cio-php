<?php
  include($_SERVER['DOCUMENT_ROOT'].'/server/config.php');
  header('Content-Type: application/json');
  session_start();
  $xobj = json_decode(file_get_contents('php://input'));
  $getNews = $xobj->News;
  $date = date("m/d/Y");
  $time = date('h:i:sa');
  $conn->query("INSERT INTO news(`news_list`,`date`,`time`)VALUES('$getNews','$date','$time');");
  $xobj->msg = 'News added';
  echo json_encode($xobj);
?>
