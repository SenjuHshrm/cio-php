app
  .config(function($routeProvider, $locationProvider){
    //authenticated routes
    $routeProvider
      .when('/:user/:name/', {
        templateUrl:'/views/home.php',
        controller:'homeCtrl',
        title:'Home'
      })
      .when('/:user/:name/loc-civ-reg', {
        templateUrl:'/views/civReg.php',
        controller:'lcrCtrl',
        title:'Local Civil Registry'
      })
      .when('/:user/:name/human-resource', {
        templateUrl:'/views/hr.php',
        controller:'hrCtrl',
        title:'Human Resource'
      })
      .when('/:user/:name/senior-citizen', {
        templateUrl:'/views/senCit.php',
        controller:'scCtrl',
        title:'Senior Citizen'
      })
      .when('/:user/:name/sanggunian', {
        templateUrl:'/views/sang.php',
        controller:'sbCtrl',
        title:'Sangguniang Brgy'
      })
      .when('/:user/:name/admin-profile', {
        templateUrl:'/views/users/admin/profile.php',
        controller:'adminProf',
        title:'Admin Profile'
      })
      .when('/:user/:name/settings', {
        templateUrl:'/views/users/admin/settings.php',
        controller:'settingCtrl',
        title:'Web Settings'
      })
      //employee profile and walk in profile
      .when('/:user/:name/emp-profile', {
        templateUrl:'/views/users/employee/profile.php',
        controller:'empProf',
        title:'Employee Profile'
      })
      .when('/:user/:name/walkin-profile', {
        templateUrl:'/views/users/walkin/profile.php',
        controller:'wInProf',
        title:'Walk In Profile'
      })
  })
