<div class='container-fluid' ng-controller='wInProf'>
  <div class='row'>
    <div class='col-md-6 col-md-offset-3'>
      <div class='content-container'>
        <h3 class='content-header'>Your Profile</h3>
        <div class='row'>
          <div class='col-xs-6 col-xs-offset-3'>
            <img src='{{pic}}' class='img-responsive img-border' width='100%' height='100%'>
          </div>
        </div>
        <hr />
        <div class='row'>
          <div class='col-xs-6 col-xs-offset-3'>
            <p>Name: {{fname}} {{mname.charAt(0)}}. {{lname}}</p>
            <p>Birthday: {{bday}}</p>
            <p>Age: {{age}}</p>
            <p>Address: {{address}}</p>
            <p>Contact No.: {{contact}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
