app
  .controller('settingCtrl', function($scope, $http){
    $('.news').hide();
    $http({
      method:'GET',
      url:'/server/info/adminProf.php',
      cache:true
    })
    .success(function(data){
      if(data.session=='No session'){
        window.location.href='/';
      }
    })
  })
  .controller('infoCtrl', function($scope){
    $scope.intro = 'In this page, you can update some parts of the web application';
  })
  //ctrl for saving news to DB
  .controller('addNewsCtrl', function($scope, $http){
    $scope.news = {};
    $scope.sendNews = function(){
      console.log($scope.news);
      $http({
        method:'POST',
        url:'/server/news/save_news.php',
        data:$scope.news,
        headers:{
          'Content-Type':'application/json'
        }
      })
      .success(function(data,stat){
        var status;
        if(stat===200){
          status = 'Success';
        }
        window.location.href='/settings';
      })
    }
  })
  .controller('curEvent', function($scope, $http){
    $('#content').keydown(function(e){
      var $this = $(this);
      var rows = parseInt($this.attr('rows'));
      var lines;

      if(e.which === 13){
        $this.attr('rows', rows + 1);
      }

      if(e.which === 8 && rows !==1){
        lines = $(this).val().split('\n');
        console.log(lines);
        if(!lines[lines.length - 1]){
          $this.attr('rows', rows - 1);
        }
      }
    });
  })
  .controller('pollCtrl', function($scope, $http){
    $scope.pollQuest = {};
    $scope.setPoll = function(){
      $http({
        method:'POST',
        url:'',
        data:$scope.pollQuest,
        headers:{
          'Content-Type':'application/json'
        }
      })
    }
  })
