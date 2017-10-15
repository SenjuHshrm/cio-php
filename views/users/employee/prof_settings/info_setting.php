<form ng-submit='updInfo()' style='padding:10px;'>
  <div class='row'>
    <div class='col-xs-6'>
      <div class='form-group'>
        <label for='fname'>First Name:</label>
        <input type='text' name='fname' class='form-control' ng-model='updateInfo.fname'>
      </div>
      <div class='form-group'>
        <label for='mname'>Middle Name:</label>
        <input type='text' name='mname' class='form-control' ng-model='updateInfo.mname'>
      </div>
      <div class='form-group'>
        <label for='lname'>Last Name:</label>
        <input type='text' name='lname' class='form-control' ng-model='updateInfo.lname'>
      </div>
    </div>
    <div class='col-xs-6'>
      <div class='form-group'>
        <label for='bday'>Birth Date:</label>
        <input type='date' name='bday' class='form-control'>
      </div>
      <div class='form-group'>
        <label for='age'>Age:</label>
        <input type='text' name='age' class='form-control' ng-model='updateInfo.age'>
      </div>
      <div class='form-group'>
        <label for='contact'>Contact No.:</label>
        <input type='text' name='contact' class='form-control' ng-model='updateInfo.contact'>
      </div>
    </div>
    <div class='col-xs-12'>
      <div class='form-group'>
        <label for='address'>Address:</label>
        <input type='text' name='address' class='form-control' ng-model='updateInfo.address'>
      </div>
    </div>
    <div class='col-xs-12'>
      <button type='submit' class='btn btn-success col-xs-6 col-xs-offset-3'>Update info</button>
    </div>
  </div>
</form>
