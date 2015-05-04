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
                .when('/map', {
                    templateUrl: 'template/map.html',
                    controller: 'MapController'
                })
                .when('/migrate', {
                    templateUrl: 'template/migrate.html',
                    controller: 'MigController'
                })
                .when('/', {
                    templateUrl: 'template/index.html',
                    controller: 'IndexController'
                })
				.otherwise({redirectTo : "/"})
				;
        }]);

app.controller("IndexController", function($scope) {
});

//var apiHost = ''; // Define HERE API host. If not define, it'll be the local server.
if (typeof apiHost == "undefined") {
    var apiHost =".";
    }