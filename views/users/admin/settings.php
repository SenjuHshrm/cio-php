<div class='container-fluid' ng-controller='settingCtrl'>
  <div class='content-container'>
    <ul class='nav nav-tabs'>
      <li><a href='#info' data-toggle='tab'>Info</a></li>
      <li><a href='#news' data-toggle='tab'>News</a></li>
      <li><a href='#curEvent' data-toggle='tab'>Current Event</a></li>
    </ul>
    <div class='tab-content'>
      <div id='info' class='tab-pane fade in active'>
        <ng-include src="'/views/users/admin/setting-ext/info.php'"></ng-include>
      </div>
      <div id='news' class='tab-pane fade'>
        <ng-include src="'/views/users/admin/setting-ext/news.php'"></ng-include>
      </div>
      <div id='curEvent' class='tab-pane fade'>
        <ng-include src="'/views/users/admin/setting-ext/cur-event.php'"></ng-include>
      </div>
    </div>
  </div>
</div>
