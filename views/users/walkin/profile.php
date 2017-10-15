<div class='container-fluid' ng-controller='wInProf'>
  <div class='row'>
    <div class='col-md-6'><!--Profile view-->
      <div class='content-container'>
        <h3 class='content-header'>Your Profile</h3>
        <div class='row'>
          <div class='col-xs-6 col-xs-offset-3'>
            <img src='{{pic}}' class='img-responsive img-border' width='100%' height='100%'>
          </div>
        </div>
        <hr />
        <div class='row'>
          <div class='col-xs-6 col-xs-offset-1'>
            <p>Name: {{fname}} {{mname.charAt(0)}}. {{lname}}</p>
            <p>Gender: {{gender}}</p>
            <p>Birthday: {{bday}}</p>
            <p>Age: {{age}}</p>
            <p>Address: {{address}}</p>
            <p>Contact No.: {{contact}}</p>
          </div>
        </div>
      </div>
    </div><!--Profile view-->
    <div class='col-md-6'>
      <div class='content-container'>
        <h3 class='content-header'>Update your profile here</h3>
      </div>
      <div class='content-container'>
        <h3 class='content-header'>Information Settings<button ng-click='showInfo = !showInfo' class='btn btn-info pull-right'><i class='fa fa-gear'></i></button></h3>
        <div ng-show='showInfo'>
          <ng-include src="'/views/users/admin/prof_settings/info_setting.php'"></ng-include>
        </div>
      </div>
      <div class='content-container'>
        <h3 class='content-header'>Account Settings<buttom ng-click='showAcct = !showAcct' class='btn btn-info pull-right'><i class='fa fa-gear'></i></button></h3>
        <div ng-show='showAcct'>
          <ng-include src="'/views/users/admin/prof_settings/acct_setting.php'"></ng-include>
        </div>
      </div>
      <div class='content-container'>
        <h3 class='content-header'>Change Profile Picture<button ng-click='showPic = !showPic' class='btn btn-info pull-right'><i class='fa fa-gear'></i></button></h3>
        <div ng-show='showPic'>
          <ng-include src="'/views/users/admin/prof_settings/pic_setting.php'"></ng-include>
        </div>
      </div>
    </div>
  </div>
</div>
