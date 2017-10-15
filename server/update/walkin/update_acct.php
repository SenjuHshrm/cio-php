<?php
  include($_SERVER['DOCUMENT_ROOT'].'/server/config.php');
  header('Content-Type = application/json');
  session_start();
  $id = $_SESSION['id'];
  $xobj = json_decode(file_get_contents('php://input'));
  $getTable = $conn->query("SELECT * FROM walk_acct WHERE id='$id';");
  $getVal = mysqli_fetch_assoc($getTable);
  $dbUser = $getVal["username"];
  $dbPass = $getVal["password"];
  $newPass = md5($xobj->password);
  $newId = md5($dbUser + $newPass);
  $conn->query("UPDATE walk_acct SET password='$newPass' WHERE id='$id';");
  $conn->query("UPDATE walk_acct SET id='$newId' WHERE username='$dbUser';");
  $conn->query("UPDATE walk_acct_info SET id='$newId' WHERE id='$id'");
  $_SESSION['id'] = $newId;
?>
