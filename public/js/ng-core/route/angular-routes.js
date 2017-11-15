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
      .when('/signup', {
        templateUrl:'/views/signup/signup.php',
        controller:'signUpCtrl',
        title:'Sign Up'
      })
      .when('/walkin-signup', {
        templateUrl:'/views/signup/walkin/signup.php',
        controller:'wInSignUp',
        title:'Walk In Sign Up'
      })
      
      //Login Routes
      .when('/login', {
        templateUrl:'/views/login/login.php',
        controller:'LoginCtrl',
        title:'Login'
      })
      //logout route
      .when('/logout', {
        template:' ',
        controller:'LogOut'
      })

      .otherwise({
        templateUrl:'/views/error/err404.php',
        controller:'err404Ctrl',
        title:'Not found'
      })
    $locationProvider.html5Mode(true);
  })
