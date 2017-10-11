<form class='form-horizontal' ng-submit='sendBirthData()'>
  <h2 class='content-header'>Birth Certificate</h2>
  <div style='padding-left:10px;padding-right:10px;'>
    <h3>Requester</h3>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqBName'>First Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqBName' class='form-control' ng-model='birthData.ReqName'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqBMid'>Middle Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqBMid' class='form-control' ng-model='birthData.ReqMid'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqBLast'>Last Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqBLast' class='form-control' ng-model='birthData.ReqLast'>
      </div>
    </div>
    <hr>
    <h3>Request Information</h3>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='bFName'>First Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='bFName' class='form-control' ng-model='birthData.rBName'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='bMName'>Middle Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='bMName' class='form-control' ng-model='birthData.rBMid'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='bLName'>Last Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='bLName' class='form-control' ng-model='birthData.rBLast'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='bDate'>Birth Date:</label>
      <div class='col-xs-9'>
        <input type='date' name='bDate' class='form-control'>
      </div>
    </div>
    <div class='form-group'>
      <div class='col-xs-12'>
        <button type='submit' data-toggle='modal' data-target='#modalBirth' class='col-xs-6 btn btn-success'>Submit</button>
        <button type='reset' class='col-xs-6 btn btn-info'>Clear</button>
        <div id='modalBirth' class='modal fade' role='dialog'>
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
                <p>Name: {{rBName}} {{rBMid.charAt(0)}}. {{rBLast}}</p>
                <p>Date of {{ReqType}}: {{bDate}}</p>
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
