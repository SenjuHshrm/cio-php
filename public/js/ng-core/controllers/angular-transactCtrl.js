app
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
