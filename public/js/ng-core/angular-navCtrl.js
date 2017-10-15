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
