<div class='container-fluid' ng-controller='lcrCtrl'>
  <div class='row'>
    <div class='col-md-3'>
      <div class='content-container'>
        <h2 class='content-header'>Transactions</h2>
        <ul class='nav nav-tabs nav-stacked'>
          <li>
            <a data-target='#birth' data-toggle='tab'><span class='fa fa-child'></span> Birth Certificate</a>
          </li>
          <li>
            <a data-target='#marriage' data-toggle='tab'><span class='fa fa-heart-o'></span> Marriage Certificate</a>
          </li>
          <li>
            <a data-target='#death' data-toggle='tab'><span class='fa fa-plus'></span> Death Certificate</a>
          </li>
          <br>
        </ul>
      </div>
      <div class='content-container'>
        <h2 class='content-header'>Forms</h2>
        <button type='button' class='btn btn-default btn-block'><span class='fa fa-child'></span> Birth Certificate</button>
        <button type='button' class='btn btn-warning btn-block'><span class='fa fa-heart-o'></span> Marriage Certificate</button>
        <button type='button' class='btn btn-info btn-block'><span class='fa fa-plus'></span> Death Certificate</button>
        <br>
      </div>
    </div>
    <div class='col-md-6'>
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
    <div class='col-md-3'>
      <div class='content-container'>
        <h2 class='content-header'>Sponsor</h2>
      </div>
      <div class='content-container'>
        <h2 class='content-header'>Guidelines</h2>
      </div>
    </div>
  </div>
</div>
