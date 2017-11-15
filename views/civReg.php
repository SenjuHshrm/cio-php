<div class='container-fluid' ng-controller='lcrCtrl'>
  <div class='row'>
    <div class='col-xs-1 col-md-2'>
      <span style='font-size:30px;cursor:pointer' ng-click ='openNav()' class='fa fa-bars'></span>
      <div id='mySidenav' class='sidenav'>
        <a href='javascript:void(0)' class='closebtn' ng-click ='closeNav()'>&times;</a>
        <span>Transactions</span>
        <ul class='nav nav-tabs nav-stacked'>
          <li>
            <a data-target='#birth' data-toggle='tab' target='#birth'><span class='fa fa-child'></span> Birth Certificate</a>
          </li>
          <li>
            <a data-target='#marriage' data-toggle='tab'><span class='fa fa-heart-o'></span> Marriage Certificate</a>
          </li>
          <li>
            <a data-target='#death' data-toggle='tab'><span class='fa fa-plus'></span> Death Certificate</a>
          </li>
          <br>
        </ul>
        <span>Forms</span>
        <a href='#'><span class='fa fa-child'></span> Birth Certificate</a>
        <a href='#'><span class='fa fa-heart-o'></span> Marriage Certificate</a>
        <a href='#'><span class='fa fa-plus'></span> Death Certificate</a>
      </div>
    </div>
    <div class='col-xs-10 col-md-8'>
      <div class='content-container'>
        <div class='tab-content'>
          <div id='birth' class='tab-pane fade in active'>
            <ng-include src="'/views/partials/transactions/birth.php'"></ng-include>
          </div>
          <div id='marriage' class='tab-pane fade'>
            <ng-include src="'/views/partials/transactions/marriage.php'"></ng-include>
          </div>
          <div id='death' class='tab-pane fade'>
            <ng-include src="'/views/partials/transactions/death.php'"></ng-include>
          </div>
        </div>
      </div>
    </div>
    <div class='col-xs-12 col-md-2'>
      <div class='content-container'>
        <h2 class='content-header'>Sponsor</h2>
      </div>
      <div class='content-container'>
        <h2 class='content-header'>Guidelines</h2>
      </div>
    </div>
  </div>
</div>
