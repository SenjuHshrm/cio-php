<div class='container-fluid' ng-controller='sbCtrl'>
  <div class='row'>
    <div class='col-xs-1 col-md-2'>
      <span style='font-size:30px;cursor:pointer' ng-click ='openNav()' class='fa fa-bars'></span>
      <div id='mySidenav' class='sidenav'>
        <a href='javascript:void(0)' class='closebtn' ng-click ='closeNav()'>&times;</a>
        <span>Resolutions</span>
        <br>
        <span>Ordinance</span>
      </div>
      <!-- <div class='content-container'>
        <h2 class='content-header'>Resolutions</h2>
      </div>
      <div class='content-container'>
        <h2 class='content-header'>Ordinance</h2>
      </div> -->
    </div>
    <div class='col-xs-10 col-md-8'>
      <div class='content-container'>
        <h2 class='content-header'>Current Event</h2>
      </div>
    </div>
    <div class='col-xs-12 col-md-2'>
      <div class='content-container'>
        <h2 class='content-header'>Sponsor</h2>
      </div>
      <div class='content-container'>
        <h2 class='content-header'>Member's Role</h2>
      </div>
    </div>
  </div>
</div>
