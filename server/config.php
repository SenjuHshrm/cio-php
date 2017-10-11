<?php
  $server = 'localhost';
  $username = 'CIO_DB';
  $password = '1234';
  $database = 'cio_spc'
  $conn = mysqli_connect($servername, $username, $password, $database);

  if(!$conn){
    die('Connection Error', .mysqli_error());
  }

?>
