app
  //navbar toggle and news flash block
  .controller('bodyCtrl', function($scope, $location){
    $scope.$on('$routeChangeSuccess', function(event,data){
      $('button.navbar-toggle').addClass('collapsed');
      $('div.navbar-collapse').removeClass('in');
      $scope.$location = $location;
      var loc = $location.path();
      if((loc=='/signup')||
        (loc=='/login')){
        $('.news').hide();
        document.body.style.backgroundColor = "white";
      }
      else{
        $('.news').show();
        document.body.style.backgroundColor = "white";
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
          count++;
          if($scope.Arr.length == count){
            count = 0;
          }
        },5000);
      }
    })
  }])
