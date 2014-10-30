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
        $scope.newReport.datetime=Date.now();
        Report.add($scope.newReport).then(function(id) {
        		$scope.loading=false;
                $scope.newReport.id=id;
                //$scope.newReport={};
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

app.controller("PictureController", function($scope,Report) {
    console.log("coucou");
    $scope.onFileSelect = function($files) {
        console.log("coucou2");
        //$files: an array of files selected, each file has name, size, and type.
        for (var i = 0; i < $files.length; i++) {
            var file = $files[i];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function() {
                console.log(reader.result);
                $scope.newPicture.b64pic = reader.result;
            }
            
        }
    }
});