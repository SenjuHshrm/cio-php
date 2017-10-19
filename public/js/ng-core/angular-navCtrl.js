app
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
  .controller('newsCtrl', ['$scope','$http','$interval',function($scope,$http,$interval){
    $http({
      method:'GET',
      url:'/server/news/get_news.php',
      headers:{
        'Content-Type':'application/json'
      }
    })
    .success(function(data){
      $scope.Arr = data.news;
      $scope.msg = data.msg;
      if($scope.msg=='No news for today'){
        $scope.flashNews = $scope.msg;
      }
      else{
        var count = 0;
        $interval(function(){
          $scope.flashNews = $scope.Arr[count];
          console.log($scope.flashNews);
          count++;
          if($scope.Arr.length == count){
            count = 0;
          }
        },5000);
      }
    })
  }])
