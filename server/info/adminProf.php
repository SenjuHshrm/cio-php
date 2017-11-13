<?php
  header('Content-Type: application/json');
  include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
  session_start();
  $xobj = new stdClass();
  if(!isset($_SESSION['id'])){
    $xobj->session = 'No session';
  }
  else{
    $id = $_SESSION['id'];
    $query = $conn->query("SELECT * FROM admin_acct_info WHERE id='$id';");
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
