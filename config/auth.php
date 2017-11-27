<?php

  function LoginAuth($tbl,$id,$user){
    include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
    $res = new stdClass();
    if(mysqli_connect_errno()){
      $res->msg = 'There was an error connecting to server.';
    }
    else{
      session_start();
      $sql = "CALL LoginAuth('$id','$tbl')";
      if($result = mysqli_query($conn,$sql)){
        $row = mysqli_num_rows($result);
        $query = mysqli_fetch_assoc($result);
        if($row == 1){
          $res->msg = 'success';
          $res->name = $query['username'];
          $res->user = $user;
          $_SESSION['id'] = $id;
          $_SESSION['login'] = $query['FName']." ".substr($query['MName'],0,1).". ".$query['LName'];
          $_SESSION['pic'] = $query['pic'];
          $_SESSION['userType'] = $user;
          $_SESSION['username'] = $query['username'];
        }else{
          $res->msg = 'fail';
        }
      }
    }
    return $res;
  }
  //
  function GetProfile($tbl,$id){
    include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
    $res = new stdClass();
    if(mysqli_connect_errno()){
      $res->msg = 'There was an error connecting to server.';
    }
    else{
      $sql = "CALL LoginAuth('$id','$tbl')";
      if($result = mysqli_query($conn,$sql)){
        $query = mysqli_fetch_assoc($result);
        $res->fname = $query["FName"];
        $res->mname = $query["MName"];
        $res->lname = $query["LName"];
        $res->gender = $query["gender"];
        $res->age = $query["age"];
        $res->bday = $query["bday"];
        $res->address = $query["address"];
        $res->contact = $query["contact"];
        $res->pic = $query["pic"];
        $res->session = $id;
      }
      else{
        $res->msg = 'fail';
      }
    }
    return $res;
  }
  //
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
