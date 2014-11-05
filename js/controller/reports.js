app.controller("SearchController", function($scope,$rootScope, Report) {
    $rootScope.$broadcast("BeginStatus","loading");
	$scope.reports=Report.getReports().then(function(reports){
        $rootScope.$broadcast("EndStatus");
        $scope.reports=reports;
    }, function(msg) {
            alert(msg);
    })
});

app.controller("AddController", function($scope,$rootScope, Report, geolocation) {
    $scope.newReport={};

    geolocation.getLocation().then(function(data){
      $scope.coords= {longitude:data.coords.longitude, latitude:data.coords.latitude};
    });

    $scope.addReport = function() {
        $rootScope.$broadcast("BeginStatus","posting");
        $scope.newReport.geolocation=$scope.coords;
        $scope.newReport.datetime=Date.now();
        Report.add($scope.newReport).then(function(id) {
                $rootScope.$broadcast("EndStatus");
                $scope.newReport.id=id;
                $scope.newReport.reportForm=false;
                $scope.newReport.pictureForm=true;
                //$scope.newReport={};
        	}, function(msg) {
        		alert(msg);
        	})
    }



});

app.controller("ReportController", function($scope, $rootScope, Report, $routeParams) {
    $rootScope.$broadcast("BeginStatus","loading");
	$scope.report=Report.getReport($routeParams.id).then(function(report){
        $rootScope.$broadcast("EndStatus");
        $scope.report=report;
    }, function(msg) {
            alert(msg);
    })
});

app.controller("PictureController", function($scope,Report) {
    $scope.onFileSelect = function($files) {
        //$files: an array of files selected, each file has name, size, and type.
        for (var i = 0; i < $files.length; i++) {
            var file = $files[i];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                console.log(reader.result);
                $scope.newReport.b64pic = reader.result;
                $scope.$apply();
            }
            reader.progress = function() {


            }
        }
    }
});