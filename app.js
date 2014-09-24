var app = angular.module('brokenstuff', ['ngRoute','geolocation']);

app.config(['$routeProvider',
        function($routeProvider) {
            $routeProvider
                .when('/search', {
                    templateUrl: 'template/search.html',
                    controller: 'SearchController'
                })
                .when('/add', {
                    templateUrl: 'template/add.html',
                    controller: 'AddController'
                })
                .when('/report/:id', {
                    templateUrl: 'template/report.html',
                    controller: 'ReportController'
                })
                .when('/', {
                    templateUrl: 'template/index.html',
                    controller: 'IndexController'
                })
				.otherwise({redirectTo : "/"})
				;
        }]);


app.controller("IndexController", function($scope) {
	$scope.message="yoloindex";
	});