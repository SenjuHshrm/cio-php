<?php
  include($_SERVER['DOCUMENT_ROOT'].'/server/config.php');
  session_start();
  $id = $_SESSION['id'];
  $username_db = $conn->query("SELECT `username` FROM `walk_acct` WHERE `id`='$id';");
  $username = mysqli_fetch_array($username_db);
  $imgName = md5($username[0] + $id);
  if(!empty($_FILES['image'])){
    $path = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image = $imgName.'.'.$path;
    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/public/imgs/walkin/'.$image);
    $updImgDb = '/public/imgs/walkin/'.$image;
    $conn->query("UPDATE `walk_acct_info` SET `pic`='$updImgDb' WHERE `id`='$id';");
    $sessionPic = $conn->query("SELECT `pic`FROM `walk_acct_info` WHERE `id`='$id';");
    $setPic = mysqli_fetch_array($sessionPic);
    $_SESSION['pic'] = $setPic[0];
  }
?>
