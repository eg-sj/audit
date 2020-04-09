(function(){
	var app = angular.module('myApp', ['ui.router']);

	app.run(function($rootScope, $location, $state, LoginService) {
		$rootScope.$on('$stateChangeStart', 
			function(event, toState, toParams, fromState, fromParams){
				console.log('Changed state to: ' +toState);
		});

		if (!LoginService.isAuthenticated()) {
			$state.transitionTo('login');
		}
	});

	app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
		$urlRouterProvider.otherwise('/home');

		$stateProvider.state('login', {
			url : 'user/login',
			templateUrl : 'login.html',
			controller : 'LoginController'
		})
		.state('home', {
			url : '/home',
			templateUrl : 'home.html',
			controller : 'HomeController'
		});
	}]);

	app.controller('LoginController', function($scope, $rootScope, $stateParams, $state, LoginService) {
		$rootScope.title = "LOGIN";

		$scope.formSubmit = function(){
			if (LoginService.login($scope.username, $scope.password)) {
				$scope.error = '';
				$scope.username = '';
				$scope.password = '';
				$scope.transitionTo('home');
			} else {
				$scope.error = "username dan password salah";
			}
		};
	});

	app.controller('HomeController', function($scope, $rootScope, $stateParams, $state, LoginService) {
    $rootScope.title = "LOGIN";
    
  });

app.factory('LoginService', function() {
    var admin = 'admin';
    var pass = 'dumet';
    var isAuthenticated = false;

   return {
      login : function(username, password) {
        isAuthenticated = username === admin && password === pass;
        return isAuthenticated;
      },
      isAuthenticated : function() {
        return isAuthenticated;
      }
    };

});
})();