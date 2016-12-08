var app = angular.module('3wirebuild',["ngRoute"]);

app.config( ['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
  $routeProvider
  .when('/', {
    templateUrl: '../nav/about.php',
  })
  .when('/about', {
    templateUrl: '../nav/about.php'
  })
  .when('/projects', {
    templateUrl: '../nav/projects.php'
  })
  .when('/contact', {
    templateUrl: '../nav/contact.php'
  })
  .when('/blog', {
    templateUrl: '../nav/blog.php',
    controller: 'BlogController'
  })
  .otherwise({redirectTo: '/'});

  // Add HTML5 History API support
  $locationProvider.html5Mode(true);
  }
]);

app.directive("mainHeader", function(){
  return{
      templateUrl: "../templates/header.php",
  };
});

app.directive("mainFooter", function(){
  return{
      templateUrl: "templates/footer.php"
  };
});

app.controller('active', function($scope, $location){
        $scope.isActive = function (viewLocation) {
        var active = (viewLocation === $location.path());
        return active;
        };
    });
