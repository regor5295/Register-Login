var MyApp = angular.module('MyApp',[]);
MyApp.controller('MyController', function($scope, $http){

  $scope.connect = function(){
      let url = "http://127.0.0.1/MyApp/scripts/connect.php";
      let data = $.param({
          uname : $scope.uname,
          upass : $scope.upass,
          fname : $scope.fname,
          mname : $scope.mname,
          lname : $scope.lname,
          gender : $scope.gender,
          bday : $scope.bday
      }); 

      let config = {
        headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                  }
      }
      $http.post(url, data, config)
           .then(
               function(response){
                 console.log(response);
                 $scope.callData();
               }, 
               function(response){
                 console.log(response);
               }
            );
      }

 $scope.login = function(){
       let url = "http://127.0.0.1/MyApp/scripts/login.php";
           let data = $.param({
            uname : $scope.uname,
            upass : $scope.upass
          });   

          let config = {
            headers : {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                      }
          }
            $http.post(url, data, config)
               .then(
               function(response){
                 console.log(response);
                 $scope.callData();
               }, 
               function(response){
                 console.log(response);
               }
            );
      }

      $scope.users = function() {
              $http.get("http://127.0.0.1/MyApp/scripts/userprof.php")
                .then(
                  function (success){
                    $scope.users = success.data;
                  },
                  function (error){
                    console.log("Failed!.");
                  }
                ); 
          }
});