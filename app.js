var app = angular.module('brokenstuff', ['ngRoute']);

app.config(['$routeProvider',
        function($routeProvider) {
		console.debug("yolo");
            $routeProvider
                .when('/search', {
                    templateUrl: 'template/add.html',
                    controller: 'SearchController'
                })
                .when('/add', {
                    templateUrl: 'template/add.html',
                    controller: 'AddController'
                })
                .when('/', {
                    templateUrl: 'template/index.html',
                    controller: 'IndexController'
                })
				.otherwise({redirectTo : "/"})
				;
        }]);

app.service('Report', function(){

    this.reports=[{"id":1,"name":"Automate de service HS","description":"Automate de service HS","add_date":"2014-02-14T11:33:00+02:00","end_date":"","location":["RER A","La D\u00e9fense Grande Arche"],"geolocation":{"longitude":2.2418684,"latitude":48.8911407},"picture":"http:\/\/lorempicsum.com\/futurama\/350\/200\/1","status":"open","nb_vote_end":100}];

    this.getReports = function() {
        return this.reports;
    };

    this.getReport = function(id){
        return this.reports[0];
    }

})

app.controller("IndexController", function($scope) {
	$scope.message="yoloindex";
	});
	
app.controller("SearchController", function($scope, Report) {
	$scope.Report=Report.getReport(0);
    console.log(Report.getReport(0));
	});
	
app.controller("AddController", function($scope, Report) {
	$scope.message="yoloAdd";
	});