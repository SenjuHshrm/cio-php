app
  //login controllers
  .controller('LoginCtrl', function($scope, $http){
    $http({
      url:'/config/session.php'
    })
    .success(function(data){
      var session = data.session;
      if(session == true){
        window.location.href='/'
      }
      else{
        $scope.userTypes = [{
          value:'admin',
          label:'Administrator',
        }, {
          value:'emply',
          label:'Employee'
        }, {
          value:'wlkin',
          label:'Walk In'
        }];
        $('.news').hide();
        $scope.LoginData = {};
        $scope.Login = function(){
          $scope.LoginData.userType = $scope.userType.value;
          $http({
            method:'POST',
            url:'/server/login/loginAuth.php',
            data:$scope.LoginData,
            headers:{
              'Content-Type':'application/json'
            }
          })
          .success(function(data){
            var msg = data.message;
            if(msg=='success'){
              window.location.href='/';
            }
            else{
              // window.location.href='/login';
              newAlert(msg);
              function newAlert(message){
                $('#MsgOut').append($(`<div class='alert alert-danger' ng-show='errorMsg'>`+
                  `<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>`+
                  `<p>${message}</p>`+
                  `</div>`));
                setTimeout(function(){
                  $('#MsgOut').children('.alert:first-child').fadeTo(1500,0).slideUp(200, function() {
                    $(this).remove();
                  });
                }, 2000);
              }
            }
          })
        };
      }
    })
  })
  //other ctrls - to be separated soon
