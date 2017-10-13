app
  //login and logout controllers
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
  .controller('LogOut', function($http){
    $http({
      method:'POST',
      url:'/server/login/LogOut.php'
    })
    .success(function(res){
      window.location.href='/'
    })
  })
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
  //title tag binder
  .controller('titleCtrl', ['$scope', function($scope){
    $scope.$on('$routeChangeSuccess', function(event,data){
      $scope.title = data.title;
    });
  }])
  //navbar toggle and news flash block
  .controller('bodyCtrl', function($scope, $location){
    $scope.$on('$routeChangeSuccess', function(event,data){
      $('button.navbar-toggle').addClass('collapsed');
      $('div.navbar-collapse').removeClass('in');
      $scope.$location = $location;
      var loc = $location.path();
      if((loc=='/admin-login')||
      (loc=='/emp-login')||
      (loc=='/walkIn-login')||
      (loc=='/employee-signup')||
      (loc=='/walkin-signup')){
        $('.news').hide();
      }
      else{
        $('.news').show();
      }
    });
  })
  .controller('homeCtrl', function($scope){

  })
  .controller('hrCtrl', function($scope){

  })
  .controller('scCtrl', function($scope){

  })
  .controller('sbCtrl', function($scope){

  })
  //transactions controller
  .controller('lcrCtrl', function($scope, $http, $filter){
    $scope.birthData = {};
    $scope.marriageData = {};
    $scope.deathData = {};

    //submit functions
    //birth
    $scope.sendBirthData = function(){
      var bDateObj = new Date($('input[name="bDate"]').val()),
      bday = bDateObj.getDate(),
      bmo = bDateObj.getMonth()+1,
      byr = bDateObj.getFullYear();
      $scope.birthData.bDate = [bmo,bday,byr].join('/');
      $http({
        method:'POST',
        url:'/server/reqCert/reqBirth.php',
        data:$scope.birthData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        console.log(data);
        if(data.message == 'Data Sent'){
          $scope.message = data.message;
          $scope.ReqName = data.ReqName;
          $scope.ReqMid = data.ReqMid;
          $scope.ReqLast = data.ReqLast;
          $scope.rBName = data.rBName;
          $scope.rBMid = data.rBMid;
          $scope.rBLast = data.rBLast;
          $scope.bDate = data.bDate;
          $scope.ReqType = data.ReqType;
          $scope.RefNum = data.RefNum;
        } else{
          $scope.message = data.message;
          $scope.ReqName = '';
          $scope.ReqMid = '';
          $scope.ReqLast = '';
          $scope.rBName = '';
          $scope.rBMid = '';
          $scope.rBLast = '';
          $scope.bDate = '';
          $scope.ReqType = '';
          $scope.RefNum = '';
        }

      })
    }
    //marriage
    $scope.sendMarriageData = function(){
      var mDateObj = new Date($('input[name="mDate"]').val()),
      mday = mDateObj.getDate(),
      mmo = mDateObj.getMonth()+1,
      myr = mDateObj.getFullYear();
      $scope.marriageData.mDate = [mmo,mday,myr].join('/');
      $http({
        method:'POST',
        url:'/server/reqCert/reqMarriage.php',
        data:$scope.marriageData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        console.log(data);
        if(data.message == 'Data Sent'){
          $scope.message = data.message;
          $scope.ReqName = data.ReqName;
          $scope.ReqMid = data.ReqMid;
          $scope.ReqLast = data.ReqLast;
          $scope.rMName = data.rMName;
          $scope.rMMid = data.rMMid;
          $scope.rMLast = data.rMLast;
          $scope.mDate = data.mDate;
          $scope.ReqType = data.ReqType;
          $scope.RefNum = data.RefNum;
        } else{
          $scope.message = data.message;
          $scope.ReqName = '';
          $scope.ReqMid = '';
          $scope.ReqLast = '';
          $scope.rMName = '';
          $scope.rMMid = '';
          $scope.rMLast = '';
          $scope.mDate = '';
          $scope.ReqType = '';
          $scope.RefNum = '';
        }
      })
    }
    //death
    $scope.sendDeathData = function(){
      var dDateObj = new Date($('input[name="dDate"]').val()),
      dday = dDateObj.getDate(),
      dmo = dDateObj.getMonth()+1,
      dyr = dDateObj.getFullYear();
      $scope.deathData.dDate = [dmo,dday,dyr].join('/');
      $http({
        method:'POST',
        url:'/server/reqCert/reqDeath.php',
        data:$scope.deathData,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        console.log(data);
        if(data.message == 'Data Sent'){
          $scope.message = data.message;
          $scope.ReqName = data.ReqName;
          $scope.ReqMid = data.ReqMid;
          $scope.ReqLast = data.ReqLast;
          $scope.rDName = data.rDName;
          $scope.rDMid = data.rDMid;
          $scope.rDLast = data.rDLast;
          $scope.dDate = data.dDate;
          $scope.ReqType = data.ReqType;
          $scope.RefNum = data.RefNum;
        } else{
          $scope.message = data.message;
          $scope.ReqName = '';
          $scope.ReqMid = '';
          $scope.ReqLast = '';
          $scope.rDName = '';
          $scope.rDMid = '';
          $scope.rDLast = '';
          $scope.dDate = '';
          $scope.ReqType = '';
          $scope.RefNum = '';
        }
      })
    }
  })
