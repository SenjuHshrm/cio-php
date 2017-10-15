app
//title tag binder
.controller('titleCtrl', ['$scope', function($scope){
  $scope.$on('$routeChangeSuccess', function(event,data){
    $scope.title = data.title;
  });
}])
