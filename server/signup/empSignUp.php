<?php
  include(dirname(__FILE__).'/../config.php');
  header('Content-Type: application/json');
  session_start();
  $xobj = file_get_contents('php://input');
  $xobjParse = json_decode($xobj);
  //extract properties from obj
  $username = $xobjParse->username;
  $password = md5($xobjParse->password);
  $authpass = md5($xobjParse->authpass);
  $fname = $xobjParse->fname;
  $mname = $xobjParse->mname;
  $lname = $xobjParse->lname;
  $age = (int)$xobjParse->age;
  $birthday = $xobjParse->birthday;
  $gender = $xobjParse->gender;
  $contact = $xobjParse->contact;
  $address = $xobjParse->address;
  //create unique id
  $id = md5($username + $password);
  //set default for $pic
  if($gender=='male'){
    $pic = '/public/imgs/default/def_prof_male.png';
  }
  else if($gender=='female'){
    $pic = '/public/imgs/default/def_prof_female.jpg';
  }
  //compare $password and $authpass
  if($password != $authpass){
    $xobjParse->message = 'Password mismatch.';
  }
  else{
    $sql = "INSERT INTO emp_acct(id,username,password)VALUES('$id','$username','$password');";
    $sql .= "INSERT INTO emp_acct_info(id,Fname,Mname,Lname,Gender,age,bday,address,contact,pic)VALUES('$id','$fname','$mname','$lname','$gender','$age','$birthday','$address','$contact','$pic');";

    if(mysqli_multi_query($conn,$sql)){
      $xobjParse->message = 'You are now registered.';
    }
    else{
      $xobjParse->message = 'An error occured while connecting';
    }
    mysqli_close($conn);
  }
  echo(json_encode($xobjParse));
?>
