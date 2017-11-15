<?php session_start();?>
<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
  <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#example-navbar-collapse'>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
    </button>
    <a class='navbar-brand' href='#'>City Information Office</a>
  </div>
  <div class='collapse navbar-collapse' id='example-navbar-collapse'>
    <ul class='nav navbar-nav navbar-right nav-ul-margin'>
      <?php
        if(isset($_SESSION['login'])){
          echo "<li>";
          echo "  <a href='/".$_SESSION['userType']."/".$_SESSION['username']."/'><span class='fa fa-home'></span>";
          echo "    Home</a></li>";
          echo "<li>";
          echo "  <a href='/".$_SESSION['userType']."/".$_SESSION['username']."/loc-civ-reg'><span class='fa fa-th'></span>";
          echo "    Local Civil Registry</a></li>";
          echo "<li>";
          echo "  <a href='/".$_SESSION['userType']."/".$_SESSION['username']."/human-resource'><span class='fa fa-stack-exchange'></span>";
          echo "    Human Resource</a></li>";;
          echo "<li>";
          echo "  <a href='/".$_SESSION['userType']."/".$_SESSION['username']."/senior-citizen'><span class='fa fa-users'></span>";
          echo "    Senior Citizen</a></li>";
          echo "<li>";
          echo "  <a href='/".$_SESSION['userType']."/".$_SESSION['username']."/sanggunian'><span class='fa fa-university'></span>";
          echo "    Sanggunian</a></li>";
        }
        else{
          echo "<li>";
          echo "  <a href='/'><span class='fa fa-home'></span>";
          echo "    Home</a></li>";
          echo "<li>";
          echo "  <a href='/loc-civ-reg'><span class='fa fa-th'></span>";
          echo "    Local Civil Registry</a></li>";
          echo "<li>";
          echo "  <a href='/human-resource'><span class='fa fa-stack-exchange'></span>";
          echo "    Human Resource</a></li>";
          echo "<li>";
          echo "  <a href='/senior-citizen'><span class='fa fa-users'></span>";
          echo "    Senior Citizen</a></li>";
          echo "<li>";
          echo "  <a href='/sanggunian'><span class='fa fa-university'></span>";
          echo "    Sanggunian</a></li>";
        }
      ?>
      <?php
      if(isset($_SESSION['login'])){
        if($_SESSION['userType'] == 'Admin'){
          echo "<li class='dropdown'>";
          echo "<a class='dropdown-toggle login' data-toggle='dropdown' href='#'>";
          echo "<img src='".$_SESSION['pic']."' style='width:40px;height:40px;'>&nbsp;".$_SESSION['login']."&nbsp;<span class='fa fa-caret-down'></span></a>";
          echo "<ul class='dropdown-menu'>";
          echo "<li><a href='".$_SESSION['userType']."/".$_SESSION['username']."/admin-profile'><span class='fa fa-chevron-right'></span> Profile</a></li>";
          echo "<li class='divider'></li>";
          echo "<li><a href='".$_SESSION['userType']."/".$_SESSION['username']."/settings'><span class='fa fa-chevron-right'></span> Web Settings</a></li>";
          echo "<li class='divider'></li>";
          echo "<li><a href='/logout'><span class='fa fa-chevron-right'></span> Logout</a></li>";
          echo "</ul>";
          echo "</li>";
        }
        else if($_SESSION['userType'] == 'Employee'){
          echo "<li class='dropdown'>";
          echo "<a class='dropdown-toggle login' data-toggle='dropdown' href='#'>";
          echo "<img src='".$_SESSION['pic']."' style='width:40px;height:40px;'>&nbsp;".$_SESSION['login']."&nbsp;<span class='fa fa-caret-down'></span></a>";
          echo "<ul class='dropdown-menu'>";
          echo "<li><a href='".$_SESSION['userType']."/".$_SESSION['username']."/emp-profile'><span class='fa fa-chevron-right'></span> Profile</a></li>";
          echo "<li class='divider'></li>";
          echo "<li><a href='/logout'><span class='fa fa-chevron-right'></span> Logout</a></li>";
          echo "</ul>";
          echo "</li>";
        }
        else if($_SESSION['userType'] == 'WalkIn'){
          echo "<li class='dropdown'>";
          echo "<a class='dropdown-toggle login' data-toggle='dropdown' href='#'>";
          echo "<img src='".$_SESSION['pic']."' style='width:40px;height:40px;'>&nbsp;".$_SESSION['login']."&nbsp;<span class='fa fa-caret-down'></span></a>";
          echo "<ul class='dropdown-menu'>";
          echo "<li><a href='".$_SESSION['userType']."/".$_SESSION['username']."/walkin-profile'><span class='fa fa-chevron-right'></span> Profile</a></li>";
          echo "<li class='divider'></li>";
          echo "<li><a href='/logout'><span class='fa fa-chevron-right'></span> Logout</a></li>";
          echo "</ul>";
          echo "</li>";
        }
      }
      else{
        echo "<li class='dropdown'>";
        echo "<a href='/signup'><span class='fa fa-user-plus'></span> Sign Up </a>";
        echo "</li>";
        echo "<li class='dropdown'>";
        echo "<a href='/login'><span class='fa fa-sign-in'></span> Login </a>";
        echo "</li>";
    }
      ?>
    </ul>
  </div>
</nav>
