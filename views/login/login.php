<div class='container-fluid' ng-controller='LoginCtrl'>
  <div class='row'>
    <div class='col-md-4'></div>
    <div class='col-md-4'>
      <div id='MsgOut'></div>
      <div class='content-container'>
        <form class='form-horizontal' ng-submit='Login()'>
          <h2 class='content-header'>Login</h2>
          <div style='padding-left:10px;padding-right:10px'>
            <div class='form-group'>
              <label class='col-xs-3' for='userType'>Login As:</label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-users'></i></span>
                <select class='form-control' id='userType' ng-model='userType' ng-options='userType as userType.label for userType in userTypes'></select>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-xs-3' for='LoginUser'>Username: </label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-user'></i></span>
                <input type='text' name='LoginUser' class='form-control' ng-model='LoginData.LoginUser'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-xs-3' for='LoginPass'>Password: </label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                <input type='password' name='LoginPass' class='form-control' ng-model='LoginData.LoginPass'>
              </div>
            </div>
            <div class='form-group'>
              <div class='col-xs-12'>
                <button ng-click='addElement' type='submit' class='form-control btn btn-success btn-block'>Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class='col-md-4'></div>
  </div>
</div>
