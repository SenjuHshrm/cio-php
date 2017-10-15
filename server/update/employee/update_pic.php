<?php
  include($_SERVER['DOCUMENT_ROOT'].'/server/config.php');
  session_start();
  $id = $_SESSION['id'];
  $username_db = $conn->query("SELECT `username` FROM `emp_acct` WHERE `id`='$id';");
  $username = mysqli_fetch_array($username_db);
  $imgName = md5($username[0] + $id);
  if(!empty($_FILES['image'])){
    $path = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image = $imgName.'.'.$path;
    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/imgs/emp/'.$image);
    $updImgDb = '/public/imgs/emp/'.$image;
    $conn->query("UPDATE `emp_acct_info` SET `pic`='$updImgDb' WHERE `id`='$id';");
    $sessionPic = $conn->query("SELECT `pic`FROM `emp_acct_info` WHERE `id`='$id';");
    $setPic = mysqli_fetch_array($sessionPic);
    $_SESSION['pic'] = $setPic[0];
  }
?>
