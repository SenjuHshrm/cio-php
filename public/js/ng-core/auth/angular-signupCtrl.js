app
  //signup controllers
  .controller('empSignUp', function($scope, $http){
    $scope.genders = [{
      value:'male',
      label:'Male',
    }, {
      value:'female',
      label:'Female'
    }];
    $scope.empData = {};
    $scope.empSignUp = function(){
      var bdayobj = new Date($('input[name="bday"]').val()),
      day = bdayobj.getDate(),
      mo = bdayobj.getMonth()+1,
      yr = bdayobj.getFullYear();
      $scope.empData.birthday = [mo,day,yr].join('/');
      $scope.empData.gender = $scope.genderList.value;
      console.log($scope.empData);
      $http({
        method:'POST',
        url:'/server/signup/empSignUp.php',
        data:$scope.empData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        var message = data.message;
        if((message=='An error occured while connecting')||(message=='Password mismatch.')){
          $scope.errorMsg = message;
        } else{
          $scope.succ = message;
        }
      })
    };
  })
  .controller('wInSignUp', function($scope, $http){
    $scope.genders = [{
      value:'male',
      label:'Male',
    }, {
      value:'female',
      label:'Female'
    }];
    $scope.wInData = {};
    $scope.wInSignUp = function(){
      var bdayobj = new Date($('input[name="bday"]').val()),
      day = bdayobj.getDate(),
      mo = bdayobj.getMonth()+1,
      yr = bdayobj.getFullYear();
      $scope.wInData.birthday = [mo,day,yr].join('/');
      $scope.wInData.gender = $scope.genderList.value;
      console.log($scope.wInData);
      $http({
        method:'POST',
        url:'/server/signup/wInSignUp.php',
        data:$scope.wInData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        var message = data.message;
        if((message=='An error occured while connecting')||(message=='Password mismatch.')){
          $scope.errorMsg = message;
        } else{
          $scope.succ = message;
        }
      })
    };
  })
