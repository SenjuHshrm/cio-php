<div class='container-fluid' ng-controller='adminLogCtrl'>
  <div class='row'>
    <div class='col-md-4'></div>
    <div class='col-md-4'>
      <div class='alert alert-danger' ng-show='errorMsg'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <p>{{errorMsg}}</p>
      </div>
      <div class='content-container'>
        <form class='form-horizontal' ng-submit='adminLog()'>
          <h2 class='content-header'>Admin Login</h2>
          <div style='padding-left:10px;padding-right:10px'>
            <div class='form-group'>
              <label class='col-xs-3' for='adminUser'>Username: </label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-user'></i></span>
                <input type='text' name='adminUser' class='form-control' ng-model='adminData.adminUser'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-xs-3' for='adminPass'>Password: </label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                <input type='password' name='adminPass' class='form-control' ng-model='adminData.adminPass'>
              </div>
            </div>
            <div class='form-group'>
              <div class='col-xs-12'>
                <button type='submit' class='form-control btn btn-success btn-block'>Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class='col-md-4'></div>
  </div>
</div>
