<!DOCTYPE html>
  <html lang='en' ng-app='cioApp'>
    <head ng-controller='titleCtrl'>
      <base href='/'>
      <title>{{title}} | City Information Office</title>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
      <link rel='stylesheet' href='/public/css/bootstrap/bootstrap.min.css'>
      <link rel='stylesheet' href='/public/css/bootstrap/font-awesome.min.css'>
      <link rel='stylesheet' href='/public/css/main.css'>
      <script src='/public/js/jquery/jquery.min.js'></script>
      <script src='/public/js/bootstrap/bootstrap.min.js'></script>
      <script src='/public/js/angular/angular.min.js'></script>
      <script src='/public/js/ng-core/angular-module.js'></script>
      <script src='/public/js/ng-core/angular-routes.js'></script>
      <script src='/public/js/angular/angular-route.min.js'></script>
    </head>
    <body ng-cloak ng-controller='bodyCtrl'>
      <ng-include src="'/views/partials/header.php'"></ng-include>
      <div style='margin-top:100px;'></div>
      <div ng-view></div>
      <ng-include class='news' src="'/views/partials/news.php'"></ng-include>
    </body>
    <footer>
      <ng-include src="'/views/partials/footer.php'"></ng-include>
    </footer>
    <script src='/public/js/ng-core/angular-webSetCtrl.js'></script>
    <script src='/public/js/ng-core/angular-loginCtrl.js'></script>
    <script src='/public/js/ng-core/angular-logoutCtrl.js'></script>
    <script src='/public/js/ng-core/angular-adminCtrl.js'></script>
    <script src='/public/js/ng-core/angular-empCtrl.js'></script>
    <script src='/public/js/ng-core/angular-walkCtrl.js'></script>
    <script src='/public/js/ng-core/angular-navCtrl.js'></script>
    <script src='/public/js/ng-core/angular-signupCtrl.js'></script>
    <script src='/public/js/ng-core/angular-transactCtrl.js'></script>
    <script src='/public/js/ng-core/angular-titleCtrl.js'></script>
  </html>
