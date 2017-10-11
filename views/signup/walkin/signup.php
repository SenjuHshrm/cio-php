<div class='container-fluid' ng-controller='wInSignUp'>
  <div class='row'>
    <div class='col-md-1'></div>
    <div class='col-md-10'>
      <div class='content-container'>
        <h3 class='content-header'>Sign up Form for Walk In</h3>
        <form ng-submit='wInSignUp()' style='padding:0px 10px 10px 10px;'>
          <div class='row'>
            <div class='col-xs-6 col-xs-offset-3'>
              <div class='alert alert-danger' ng-show='errorMsg'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <p>{{errorMsg}}</p>
              </div>
            </div>
            <div class='col-xs-6 col-xs-offset-3'>
              <div class='alert alert-success' ng-show='succ'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <p>{{succ}}</p>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='form-group col-md-4'>
              <label for='username'>Username: </label>
              <input type='text' name='username' class='form-control' ng-model='wInData.username' required/>
            </div>
            <div class='form-group col-md-4'>
              <label for='password'>Password: </label>
              <input type='password' name='password' class='form-control' ng-model='wInData.password' required/>
            </div>
            <div class='form-group col-md-4'>
              <label for='authpass'>Repeat Password: </label>
              <input type='password' name='authpass' class='form-control' ng-model='wInData.authpass' required/>
            </div>
          </div>
          <hr />
          <div class='row'>
            <div class='col-md-4'>
              <div class='form-group'>
                <label for='fname'>First Name:</label>
                <input type='text' name='fname' class='form-control' ng-model='wInData.fname' required/>
              </div>
              <div class='form-group'>
                <label for='mname'>Middle Name:</label>
                <input type='text' name='mname' class='form-control' ng-model='wInData.mname' required/>
              </div>
              <div class='form-group'>
                <label for='lname'>Last Name:</label>
                <input type='text' name='lname' class='form-control' ng-model='wInData.lname' required/>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='form-group'>
                <label for='age'>Age:</label>
                <input type='text' name='age' class='form-control' ng-model='wInData.age' required/>
              </div>
              <div class='form-group'>
                <label for='bday'>Birthday:</label>
                <input type='date' name='bday' class='form-control' required/>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='form-group'>
                <label for='gender'>Gender:</label>
                <select class='form-control' id='gender' ng-model='genderList' ng-options='gender as gender.label for gender in genders'></select>
              </div>
              <div class='form-group'>
                <label for='cont'>Mobile Number:</label>
                <input type='text' name='cont' class='form-control' ng-model='wInData.contact' required/>
              </div>
            </div>
            <div class='col-md-8'>
              <div class='form-group'>
                <label for='addr'>Address:</label>
                <input type='text' name='addr' class='form-control' ng-model='wInData.address' required/>
              </div>
            </div>
          </div>
          <div class='row'>
            <button type='submit' class='btn btn-success col-xs-6 col-xs-offset-3'>Sign Up</button>
          </div>
        </form>
      </div>
    </div>
    <div class='col-md-1'></div>
  </div>
</div>
