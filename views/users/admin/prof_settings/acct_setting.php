<form ng-submit='updAcct()' style='padding:10px;'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='form-group'>
        <label for='mname'>New Password:</label>
        <input type='password' name='mname' class='form-control' ng-model='updateAcct.password'>
      </div>
      <button type='submit' class='btn btn-success col-xs-6 col-xs-offset-3'>Update account</button>
    </div>
  </div>
</form>
