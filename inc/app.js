var app = angular.module('3wirebuild',["ngRoute"]);

app.config(function($routeProvider){
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

  // $locationProvider.html5Mode(true); $locationProvider

});


app.directive("mainHeader", function(){
  return{
      templateUrl: "../templates/header.php",
      controller: 'NavController'
  };
});

app.directive("mainFooter", function(){
  return{
      templateUrl: "templates/footer.php"
  };
});
