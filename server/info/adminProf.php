<?php
  header('Content-Type: application/json');
  include(dirname(__FILE__).'/../config.php');
  session_start();
  $xobj = new stdClass();
  if(!isset($_SESSION['id'])){
    $xobj->session = 'No session';
  }
  else{
    $id = $_SESSION['id'];
    $query = $conn->query("SELECT Fname,Mname,Lname,Gender,age,bday,address,contact,pic FROM `admin_acct_info` WHERE `id`='$id';");
    $row = mysqli_fetch_assoc($query);
    $xobj->fname = $row["Fname"];
    $xobj->mname = $row["Mname"];
    $xobj->lname = $row["Lname"];
    $xobj->gender = $row["Gender"];
    $xobj->age = $row["age"];
    $xobj->bday = $row["bday"];
    $xobj->address = $row["address"];
    $xobj->contact = $row["contact"];
    $xobj->pic = $row["pic"];
    $xobj->session = $id;
  }
  echo json_encode($xobj);
?>
