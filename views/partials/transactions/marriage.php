<form class='form-horizontal' ng-submit='sendMarriageData()'>
  <h2 class='content-header'>Marriage Certificate</h2>
  <div style='padding-left:10px;padding-right:10px;'>
    <h3>Requester</h3>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqName'>First Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqMName' class='form-control' ng-model='marriageData.ReqName'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqMid'>Middle Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqMMid' class='form-control' ng-model='marriageData.ReqMid'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='reqLast'>Last Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='reqMLast' class='form-control' ng-model='marriageData.ReqLast'>
      </div>
    </div>
    <hr>
    <h3>Request Information</h3>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='mFName'>First Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='mFName' class='form-control' ng-model='marriageData.rMName'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='mMName'>Middle Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='mMName' class='form-control' ng-model='marriageData.rMMid'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='mLName'>Last Name:</label>
      <div class='col-xs-9'>
        <input type='text' name='mLName' class='form-control' ng-model='marriageData.rMLast'>
      </div>
    </div>
    <div class='form-group'>
      <label class='col-xs-3 control-label' for='mDate'>Marriage Date:</label>
      <div class='col-xs-9'>
        <input type='date' name='mDate' class='form-control'>
      </div>
    </div>
    <div class='form-group'>
      <div class='col-xs-12'>
        <button type='submit' data-toggle='modal' data-target='#modalMarriage' class='col-xs-6 btn btn-success'>Submit</button>
        <button type='reset' class='col-xs-6 btn btn-info'>Clear</button>
        <div id='modalMarriage' class='modal fade' role='dialog'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h4>Data Sent</h4>
              </div>
              <div class='modal-body'>
                <p>Reference: {{RefNum}}</p>
                <p>Name of Requester: {{ReqName}} {{ReqMid.charAt(0)}}. {{ReqLast}}</p>
                <hr />
                <h4>Request Info</h4>
                <p>Requested Certificate: {{ReqType}} Certificate</p>
                <p>Name: {{rMName}} {{rMMid.charAt(0)}}. {{rMLast}}</p>
                <p>Date of {{ReqType}}: {{mDate}}</p>
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
