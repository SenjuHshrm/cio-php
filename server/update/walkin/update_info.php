<?php
  include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
  header('Content-Type: application/json');
  session_start();
  $xobj = json_decode(file_get_contents('php://input'));
  $col = array('Fname','Mname','Lname','age','contact','address','bday');
  $len = count($col);
  $id = $_SESSION['id'];
  $prop = array();
  $xobj = get_object_vars($xobj);
  foreach($xobj as $key=>$val){
    $prop[] = $val;
  }
  for($i = 0; $i < $len; $i++){
    if(!empty($prop[$i])){
      $conn->query("UPDATE `walk_acct_info` SET $col[$i]='$prop[$i]' WHERE `id`='$id';");
    }
  }
  $newSession = $conn->query("SELECT Fname,Mname,Lname FROM walk_acct_info WHERE id='$id';");
  $row = mysqli_fetch_assoc($newSession);
  $fname = $row["Fname"];
  $mname = $row["Mname"];
  $lname = $row["Lname"];
  $_SESSION['login'] = $fname." ".substr($mname,0,1).". ".$lname;
?>
