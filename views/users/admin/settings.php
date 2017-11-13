<div class='container-fluid' ng-controller='settingCtrl'>
  <h2>Web View Settings</h2>
  <div class='content-container'>
    <ul class='nav nav-tabs'>
      <li><a data-target='#info' data-toggle='tab'>Info</a></li>
      <li><a data-target='#news' data-toggle='tab'>News</a></li>
      <li><a data-target='#curEvent' data-toggle='tab'>Current Event</a></li>
      <li><a data-target='#polls' data-toggle='tab'>Polls</a></li>
    </ul>
    <div class='tab-content'>
      <div id='info' class='tab-pane fade in active'>
        <ng-include src="'/views/users/admin/setting-ext/web-view/info.php'"></ng-include>
      </div>
      <div id='news' class='tab-pane fade'>
        <ng-include src="'/views/users/admin/setting-ext/web-view/news.php'"></ng-include>
      </div>
      <div id='curEvent' class='tab-pane fade'>
        <ng-include src="'/views/users/admin/setting-ext/web-view/cur-event.php'"></ng-include>
      </div>
      <div id='polls' class='tab-pane fade'>
        <ng-include src="'/views/users/admin/setting-ext/web-view/polls.php'"></ng-include>
      </div>
    </div>
  </div>
  <h2>Web Accounts Settings</h2>
  <div class='content-container'>
    <ul class='nav nav-tabs'>
      <li><a>Info</a></li>
      <li><a>Employee Accounts</a></li>
      <li><a>Walk-in Accounts</a></li>
    </ul>
  </div>
</div>
