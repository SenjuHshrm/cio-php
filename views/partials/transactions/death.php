<form class='form-horizontal' ng-submit='sendDeathData()'>
  <h2 class='content-header'>Death Certificate</h2>
  <div style='padding-left:10px;padding-right:10px;'>
    <h3>Requester</h3>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqName'>First Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqDName' class='form-control' ng-model='deathData.ReqName'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqMid'>Middle Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqDMid' class='form-control' ng-model='deathData.ReqMid'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqLast'>Last Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqDLast' class='form-control' ng-model='deathData.ReqLast'>
      </div>
    </div>
    <hr>
    <h3>Request Information</h3>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='dFName'>First Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='dFName' class='form-control' ng-model='deathData.rDName'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='dMName'>Middle Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='dMName' class='form-control' ng-model='deathData.rDMid'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='dLName'>Last Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='dLName' class='form-control' ng-model='deathData.rDLast'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='dDate'>Death Date:</label>
      <div class='col-xs-9'>
        <input type='date' name='dDate' class='form-control'>
      </div>
    </div>
    <div class='form-group'>
      <div class='col-xs-12'>
        <button type='submit' data-toggle='modal' data-target='#modalDeath' class='col-xs-6 btn btn-success'>Submit</button>
        <button type='reset' class='col-xs-6 btn btn-info'>Clear</button>
        <div id='modalDeath' class='modal fade' role='dialog'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h4>{{message}}</h4>
              </div>
              <div class='modal-body'>
                <p>Reference: {{RefNum}}</p>
                <p>Name of Requester: {{ReqName}} {{ReqMid.charAt(0)}}. {{ReqLast}}</p>
                <hr />
                <h4>Request Info</h4>
                <p>Requested Certificate: {{ReqType}} Certificate</p>
                <p>Name: {{rDName}} {{rDMid.charAt(0)}}. {{rDLast}}</p>
                <p>Date of {{ReqType}}: {{dDate}}</p>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
