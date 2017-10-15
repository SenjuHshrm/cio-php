app
  .controller('LogOut', function($http){
    $http({
      method:'POST',
      url:'/server/login/LogOut.php'
    })
    .success(function(res){
      window.location.href='/'
    })
  })
