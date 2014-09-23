app.controller("SearchController", function($scope, Report) {
    $scope.loading=true;
	$scope.reports=Report.getReports().then(function(reports){
        $scope.loading=false;
        $scope.reports=reports;
    }, function(msg) {
            alert(msg);
    })
});
	
app.controller("AddController", function($scope, Report) {
    $scope.loading=true;
    $scope.newReport={};

    $scope.addReport = function() {

    Report.add($scope.newReport).then(function() {
    		alert("ok");
    	}, function(msg) {
    		alert(msg);
    	})
    }
    $scope.newReport={};
});

app.controller("ReportController", function($scope,Report,$routeParams) {
	$scope.loading=true;
	$scope.report=Report.getReport($routeParams.id).then(function(report){
        $scope.loading=false;
        $scope.report=report;
    }, function(msg) {
            alert(msg);
    })
});