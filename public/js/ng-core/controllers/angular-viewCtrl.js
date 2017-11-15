app
  .controller('homeCtrl', function($scope){
    $scope.openNav = function() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.backgroundColor = 'rgba(0,0,0,0.4)';
    }

    $scope.closeNav = function() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "white";
    }
  })
  .controller('hrCtrl', function($scope){
    $scope.openNav = function() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.backgroundColor = 'rgba(0,0,0,0.4)';
    }

    $scope.closeNav = function() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "white";
    }
  })
  .controller('scCtrl', function($scope){
    $scope.openNav = function() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.backgroundColor = 'rgba(0,0,0,0.4)';
    }

    $scope.closeNav = function() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "white";
    }
  })
  .controller('sbCtrl', function($scope){
    $scope.openNav = function() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.backgroundColor = 'rgba(0,0,0,0.4)';
    }

    $scope.closeNav = function() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "white";
    }
  })
