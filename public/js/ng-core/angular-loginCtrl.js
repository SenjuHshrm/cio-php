app
  //login controllers
  .controller('adminLogCtrl', function($scope, $http){
    $('.news').hide();
    $scope.adminData = {};
    $scope.adminLog = function(){
      $http({
        method:'POST',
        url:'/server/login/adminAuth.php',
        data:$scope.adminData,
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
          $scope.errorMsg = msg;
        }
      })
    };
  })
  .controller('empLogCtrl', function($scope, $http){
    $('.news').hide();
    $scope.empData = {};
    $scope.empLog = function(){
      $http({
        method:'POST',
        url:'/server/login/empAuth.php',
        data:$scope.empData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        var msg = data.message;
        if(msg=='success'){
          window.location.href='/';
        } else{
          $scope.errorMsg = msg;
        }
      })
    }
  })
  .controller('walkCtrl', function($scope, $http){
    $('.news').hide();
    $scope.wInData = {};
    $scope.wInLog = function(){
      $http({
        method:'POST',
        url:'/server/login/wInAuth.php',
        data:$scope.wInData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        var msg = data.message;
        if(msg=='success'){
          window.location.href='/';
        } else{
          $scope.errorMsg = msg;
        }
      })
    }
  })
  //other ctrls - to be separated soon
  .controller('homeCtrl', function($scope){

  })
  .controller('hrCtrl', function($scope){

  })
  .controller('scCtrl', function($scope){

  })
  .controller('sbCtrl', function($scope){

  })
