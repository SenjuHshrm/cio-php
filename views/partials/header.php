<?php session_start();?>
<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
  <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#example-navbar-collapse'>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
    </button>
  <?php
    if(isset($_SESSION['login'])){
      echo "<a class='navbar-brand' href='#'>City Information Office - Logged in</a>";
    }
    else{
      echo "<a class='navbar-brand' href='#'>City Information Office</a>";
    }
    ?>

  </div>
  <div class='collapse navbar-collapse' id='example-navbar-collapse'>
    <ul class='nav navbar-nav navbar-right nav-ul-margin'>
      <li>
        <a href='/'><span class='fa fa-home'></span>
          Home</a></li>
      <li>
        <a href='/loc-civ-reg'><span class='fa fa-th'></span>
          Local Civil Registry</a></li>
      <li>
        <a href='/human-resource'><span class='fa fa-stack-exchange'></span>
          Human Resource</a></li>
      <li>
        <a href='/senior-citizen'><span class='fa fa-users'></span>
          Senior Citizen</a></li>
      <li>
        <a href='/sanggunian'><span class='fa fa-university'></span>
          Sanggunian</a></li>
      <?php
      $conn = mysqli_connect('localhost','CIO_DB','m2losdq4','cio_spc');
      $con = $conn->query("SELECT `pic` FROM `admin_acct_info`;");
      $imgDB = mysqli_fetch_array($con);
      $img = $imgDB[0];
      if(isset($_SESSION['login'])){
        echo "<li class='dropdown'>";
        echo "<a class='dropdown-toggle login' data-toggle='dropdown' href='#'>";
        echo "<img src='".$img."' style='width:40px;height:40px;'>&nbsp;".$_SESSION['login']."&nbsp;<span class='fa fa-caret-down'></span></a>";
        echo "<ul class='dropdown-menu'>";
        echo "<li><a href='#'><span class='fa fa-chevron-right'></span> Profile</a></li>";
        echo "<li class='divider'></li>";
        echo "<li><a href='#'><span class='fa fa-chevron-right'></span> Web Settings</a></li>";
        echo "<li class='divider'></li>";
        echo "<li><a href='/logout'><span class='fa fa-chevron-right'></span> Logout</a></li>";
        echo "</ul>";
        echo "</li>";
      }
      else{
        echo "<li class='dropdown'>";
        echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='fa fa-user-plus'></span> Sign Up <span class='fa fa-caret-down'></span></a>";
        echo "<ul class='dropdown-menu'>";
        echo "<li>";
        echo "<a href='/employee-signup'><span class='fa fa-chevron-right'></span> Employee</a></li>";
        echo "<li class='divider'></li>";
        echo "<li>";
        echo "<a href='/walkin-signup'><span class='fa fa-chevron-right'></span> Walk In</a></li>";
        echo "</ul>";
        echo "</li>";
        echo "<li class='dropdown'>";
        echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='fa fa-sign-in'></span> Login <span class='fa fa-caret-down'></span>";
        echo "<ul class='dropdown-menu'>";
        echo "<li>";
        echo "<a href='/admin-login'><span class='fa fa-chevron-right'></span> Admin</a></li>";
        echo "<li class='divider'></li>";
        echo "<li>";
        echo "<a href='/emp-login'><span class='fa fa-chevron-right'></span> Employee</a></li>";
        echo "<li class='divider'></li>";
        echo "<li>";
        echo "<a href='/walkIn-login'><span class='fa fa-chevron-right'></span> Walk In</a></li>";
        echo "</ul>";
        echo "</li>";
    }
      ?>
    </ul>
  </div>
</nav>
