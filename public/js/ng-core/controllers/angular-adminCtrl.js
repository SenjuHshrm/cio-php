app
  //admin controller access
  .controller('adminProf', function($scope, $http, $q){
    $('.news').hide();
    $http({
      method:'GET',
      url:'/server/info/viewProfile.php',
      cache:true
    })
    .success(function(data){
      console.log(data);
      var session = data.session;
      if(session=='No session'){
        window.location.href='/';
      }
      else{
        $scope.fname = data.fname;
        $scope.mname = data.mname;
        $scope.lname = data.lname;
        var bdayStr = data.bday.split('-');
        $scope.gender = data.gender;
        $scope.age = data.age;
        $scope.address = data.address;
        $scope.contact = data.contact;
        $scope.pic = data.pic;
        switch(bdayStr[1]){
          case '01':
            $scope.bday = 'January ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '02':
            $scope.bday = 'February ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '03':
            $scope.bday = 'March ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '04':
            $scope.bday = 'April ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '05':
            $scope.bday = 'May ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '06':
            $scope.bday = 'June ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '07':
            $scope.bday = 'July ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '08':
            $scope.bday = 'August ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '09':
            $scope.bday = 'September ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '10':
            $scope.bday = 'October ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          case '11':
            $scope.bday = 'November ' + bdayStr[2] + ', ' + bdayStr[0];
            break;
          default:
            $scope.bday = 'December ' + bdayStr[2] + ', ' + bdayStr[0];
        }
      }
    })
    //update acct info
    $scope.updateInfo = {};
    $scope.updInfo = function(){
      var bdayobj = new Date($('input[name="bday"]').val()),
      day = bdayobj.getDate(),
      mo = bdayobj.getMonth()+1,
      yr = bdayobj.getFullYear();
      var test = [mo,day,yr].join('/');
      if(test=='NaN/NaN/NaN'){
        $scope.updateInfo.birthday = "";
      }
      else{
        $scope.updateInfo.birthday = test;
      }
      console.log($scope.updateInfo);
      $http({
        method:'POST',
        url:'/server/update/admin/update_info.php',
        data:$scope.updateInfo,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .then(function(data){
        window.location = '/admin-profile';
      });
    };
    //update username and password
    $scope.updateAcct = {};
    $scope.updAcct = function(){
      $http({
        method:'POST',
        url:'/server/update/admin/update_acct.php',
        data:$scope.updateAcct,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data){
        window.location = '/admin-profile';
      })
    };
    //update image

    ///code for image upload
    $scope.form = [];
    $scope.files = [];
    $scope.updPic = function(){
      $scope.form.image = $scope.files[0];
      $http({
        method:'POST',
        url:'/server/update/admin/update_pic.php',
        processData:false,
        transformRequest:function(data){
          var formData = new FormData();
          formData.append('image', $scope.form.image);
          return formData;
        },
        data:$scope.form,
        headers:{
          'Content-Type':undefined
        }
      }).then(function(data){
        window.location = '/admin-profile';
      })
    }
    $scope.uploadedFile = function(element){
      $scope.currentFile = element.files[0];
      var reader = new FileReader();
      reader.onload = function(event){
        $scope.image_source = event.target.result;
        $scope.$apply(function($scope){
          $scope.files = element.files;
        });
      }
      reader.readAsDataURL(element.files[0]);
    }
  })
