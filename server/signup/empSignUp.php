<?php
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
    $conn = mysqli_connect('localhost','CIO_DB','m2losdq4','cio_spc');
    $sql = "INSERT INTO emp_acct(username,password)VALUES('$username','$password');";
    $sql .= "INSERT INTO emp_acct_info(Fname,Mname,Lname,Gender,age,bday,address,contact,pic)VALUES('$fname','$mname','$lname','$gender','$age','$birthday','$address','$contact','$pic');";

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
