<div class='container-fluid' ng-controller='walkCtrl'>
  <div class='row'>
    <div class='col-md-4'></div>
    <div class='col-md-4'>
      <div class='content-container'>
        <form class='form-horizontal' ng-submit='wInLog()'>
          <h2 class='content-header'>Walk In Login</h2>
          <div style='padding-left:10px;padding-right:10px'>
            <div class='form-group'>
              <label class='col-xs-3' for='wInUser'>Username: </label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-user'></i></span>
                <input type='text' name='wInUser' class='form-control' ng-model='wInData.wInUser'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-xs-3' for='wInPass'>Password: </label>
              <div class='col-xs-7 input-group'>
                <span class='input-group-addon'><i class='fa fa-lock'></i></span>
                <input type='password' name='wInPass' class='form-control' ng-model='wInData.wInPass'>
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
