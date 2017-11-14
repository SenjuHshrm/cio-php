app
  //signup controllers
  .controller('signUpCtrl', function($scope, $http){
    $http({
      url:'/config/session.php'
    })
    .success(function(data){
      var session = data.session;
      if(session == true){
        window.location.href = '/';
      }
      else{
        $scope.genders = [{
          value:'male',
          label:'Male',
        }, {
          value:'female',
          label:'Female'
        }];
        $scope.userType = [{
          value:'emply',
          label:'Employee'
        }, {
          value:'wlkin',
          label:'Walk In'
        }]
        $scope.signUpData = {};
        $scope.SignUp = function(){
          var bdayobj = new Date($('input[name="bday"]').val()),
          day = bdayobj.getDate(),
          mo = bdayobj.getMonth()+1,
          yr = bdayobj.getFullYear();
          $scope.signUpData.birthday = [mo,day,yr].join('/');
          $scope.signUpData.gender = $scope.genderList.value;
          $scope.signUpData.userType = $scope.UserType.value;
          console.log($scope.signUpData);
          $http({
            method:'POST',
            url:'/server/signup/SignUp.php',
            data:$scope.signUpData,
            headers:{
              'Content-Type':'application/json'
            }
          })
          .success(function(data){
            function newAlert(type,message){
              $('#OutMsg').append($(`<div class='alert alert-${type}' ng-show='errorMsg'>`+
                `<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>`+
                `<p>${message}</p>`+
                `</div>`));
              setTimeout(function(){
                $('#OutMsg').children('.alert:first-child').fadeTo(1500,0).slideUp(200, function() {
                  $(this).remove();
                });
              }, 2000);
            }
            var message = data.msg;
            var alrt = data.type;
            if((message=='An error occured while connecting')||(message=='Password mismatch.')){
              newAlert(alrt,message);
            } else{
              newAlert(alrt,message);
            }
          })
        };
      }
    })
  })
