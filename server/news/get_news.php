<?php
  include($_SERVER['DOCUMENT_ROOT'].'/server/config.php');
  header('Content-Type: application/json');
  $newsArr = array();
  $xobj = new stdClass();
  $news = $conn->query("SELECT `news_list` FROM `news`;");
  if($news->num_rows> 0){
    while($row = $news->fetch_assoc()){
      $newsArr[] = $row["news_list"];
    }
  }
  $xobj->news = $newsArr;
  if(count($newsArr) == 0){
    $xobj->msg = 'No news for today';
    echo json_encode($xobj);
  }
  else{
    $xobj->msg = '';
    echo json_encode($xobj);
  }

?>
