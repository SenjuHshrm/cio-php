<?php

  function LoginAuth($AcctTbl, $InfoTbl, $user, $id){
    include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
    session_start();
    $res = new stdClass();
    $dbUser = mysqli_fetch_assoc($conn->query("SELECT username FROM $AcctTbl WHERE id='$id';"));
    $dbPass = mysqli_fetch_assoc($conn->query("SELECT password FROM $AcctTbl WHERE id='$id';"));
    if(($dbUser != false) && ($dbPass != false)){
      $dbInfo = mysqli_fetch_assoc($conn->query("SELECT * FROM $InfoTbl WHERE id='$id';"));
      $_SESSION['login'] = $dbInfo['Fname']." ".substr($dbInfo['Mname'],0,1).". ".$dbInfo['Lname'];
      $_SESSION['pic'] = $dbInfo['pic'];
      $_SESSION['userType'] = $user;
      $_SESSION['id'] = $dbInfo['id'];
      $_SESSION['username'] = $dbUser['username'];
      $res->message = 'success';
      $res->name = $dbUser['username'];
      $res->user = $_SESSION['userType'];
    }
    else if(($dbUser == false) && ($dbPass != false)){
      $res = 'Wrong Username.';
    }
    else if(($dbUser != false) && ($dbPass == false)){
      $res = 'Wrong Password';
    }
    else{
      $res = 'Account not registered.';
    }
    $conn->close();
    return $res;
  }

  function SignUp($obj,$AcctTbl,$InfoTbl){
    include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
    $password = md5($obj->password);
    $res = new stdClass();
    $sql = "INSERT INTO $AcctTbl(id,username,password)VALUES('$obj->id','$obj->username','$password');";
    $sql .= "INSERT INTO $InfoTbl(id,Fname,Mname,Lname,Gender,age,bday,address,contact,pic)VALUES('$obj->id','$obj->fname','$obj->mname','$obj->lname','$obj->gender',$obj->age,'$obj->birthday','$obj->address','$obj->contact','$obj->pic');";

    if(mysqli_multi_query($conn,$sql)){
      $res->msg = 'You are now registered.';
      $res->type = 'success';
    }
    else{
      $res->msg = 'An error occured while connecting';
      $res->type = 'danger';
    }
    mysqli_close($conn);
    return $res;
  }

  // function UpdateAcct($user,$obj,$id){
  //   include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
  //   $col = array('Fname','Mname','Lname','age','contact','address','bday');
  //   $len = count($col);
  //   $prop = array();
  //   $xobj = get_object_vars($obj);
  //   foreach($xobj as $key=>$val){
  //     $prop[] = $val;
  //   }
  //   if($user == 'Admin'){
  //     for($i = 0; $i < $len; $i++){
  //       if(!empty($prop[$i])){
  //         $conn->query("UPDATE `admin_acct_info` SET $col[$i]='$prop[$i]' WHERE `id`='$id';");
  //       }
  //     }
  //   }
  // }
?>
