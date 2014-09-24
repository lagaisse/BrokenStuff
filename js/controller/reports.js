app.controller("SearchController", function($scope, Report) {
    $scope.loading=true;
	$scope.reports=Report.getReports().then(function(reports){
        $scope.loading=false;
        $scope.reports=reports;
    }, function(msg) {
            alert(msg);
    })
});
	
app.controller("AddController", function($scope, Report, geolocation) {
    $scope.newReport={};

    geolocation.getLocation().then(function(data){
      $scope.coords= {longitude:data.coords.longitude, latitude:data.coords.latitude};
    });

    $scope.addReport = function() {
        $scope.loading=true;
        $scope.newReport.geolocation=$scope.coords;
        Report.add($scope.newReport).then(function() {
        		$scope.loading=false;
                $scope.newReport={};
        	}, function(msg) {
        		alert(msg);
        	})
    }
    
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
