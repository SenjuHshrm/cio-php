app
  .config(function($routeProvider, $locationProvider){
    $routeProvider
    //non-loggedin routes(navigation bar)
      .when('/', {
        templateUrl:'/views/home.php',
        controller:'homeCtrl',
        title:'Home'
      })
      .when('/loc-civ-reg', {
        templateUrl:'/views/civReg.php',
        controller:'lcrCtrl',
        title:'Local Civil Registry'
      })
      .when('/human-resource', {
        templateUrl:'/views/hr.php',
        controller:'hrCtrl',
        title:'Human Resource'
      })
      .when('/senior-citizen', {
        templateUrl:'/views/senCit.php',
        controller:'scCtrl',
        title:'Senior Citizen'
      })
      .when('/sanggunian', {
        templateUrl:'/views/sang.php',
        controller:'sbCtrl',
        title:'Sangguniang Brgy'
      })
      //signup routes
      .when('/employee-signup', {
        templateUrl:'/views/signup/employee/signup.php',
        controller:'empSignUp',
        title:'Employee Sign Up'
      })
      .when('/walkin-signup', {
        templateUrl:'/views/signup/walkin/signup.php',
        controller:'wInSignUp',
        title:'Walk In Sign Up'
      })
      //Login Routes
      .when('/admin-login', {
        templateUrl:'/views/login/adminLogin.php',
        controller:'adminLogCtrl',
        title:'Admin Login'
      })
      .when('/emp-login', {
        templateUrl:'/views/login/empLogin.php',
        controller:'empLogCtrl',
        title:'Employee Login'
      })
      .when('/walkIn-login', {
        templateUrl:'/views/login/wInLogin.php',
        controller:'walkCtrl',
        title:'Walk In Login'
      })
      //logout route
      .when('/logout', {
        template:' ',
        controller:'LogOut'
      })
    $locationProvider.html5Mode(true);
  })
