<?php

  function LoginAuth($AcctTbl, $InfoTbl, $user, $id){
    include($_SERVER['DOCUMENT_ROOT'].'/config/connect.php');
    session_start();
    $dbUser = mysqli_fetch_assoc($conn->query("SELECT username FROM $AcctTbl WHERE id='$id';"));
    $dbPass = mysqli_fetch_assoc($conn->query("SELECT password FROM $AcctTbl WHERE id='$id';"));
    if(($dbUser != false) && ($dbPass != false)){
      $dbInfo = mysqli_fetch_assoc($conn->query("SELECT * FROM $InfoTbl WHERE id='$id';"));
      $_SESSION['login'] = $dbInfo['Fname']." ".substr($dbInfo['Mname'],0,1).". ".$dbInfo['Lname'];
      $_SESSION['pic'] = $dbInfo['pic'];
      $_SESSION['userType'] = $user;
      $_SESSION['id'] = $dbInfo['id'];
      $res = 'success';
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

  // function SignUp()
?>
