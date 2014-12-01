app.controller("SearchController", function($scope,$rootScope, Report) {
    $rootScope.$broadcast("BeginStatus","loading");
	$scope.reports=Report.getReports().then(function(reports){
        $rootScope.$broadcast("EndStatus");
        $scope.reports=reports;
        }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error :"+reason);
    })
});

app.controller("AddController", function($scope,$rootScope, $timeout, Report, geolocation) {
    $scope.newReport={};

    geolocation.getLocation().then(function(data){
      $scope.coords= {longitude:data.coords.longitude, latitude:data.coords.latitude};
    });

    $scope.locations = [];
    $scope.sublocations = [];
    Report.getLocations().then(function(locations){
        $scope.locations=locations;
    })

    $scope.addReport = function() {
        $rootScope.$broadcast("BeginStatus","posting");
        $scope.newReport.geolocation=$scope.coords;
        $scope.newReport.datetime=Date.now();
        Report.add($scope.newReport).then(function(id) {
                $rootScope.$broadcast("EndStatus");
                $scope.newReport.id=id;
                $scope.newReport.reportForm=false;
                $scope.newReport.pictureForm=true;
        	}, function(reason) {
            $rootScope.$broadcast("FlashStatus","error :"+reason);
        })
    }

    $scope.populateSub = function(text)
       {
        $timeout(function() {
            Report.getSubLocations(text).then(function(sublocations){
                    $scope.sublocations=sublocations;
                })
        }, 0);
       }
});

app.controller("ReportController", function($scope, $rootScope, Report, $routeParams) {
    $rootScope.$broadcast("BeginStatus","loading");
	$scope.report=Report.getReport($routeParams.id).then(function(report){
        $rootScope.$broadcast("EndStatus");
        $scope.report=report;
    }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error :"+reason);
    })
});

app.controller("PictureController", function($scope, $rootScope, $timeout, Report) {
    $scope.onFileSelect = function($files) {
        //$files: an array of files selected, each file has name, size, and type.
        for (var i = 0; i < $files.length; i++) {
            var file = $files[i];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                console.log(reader.result);
                $scope.newReport.b64pic = reader.result;
            }
        }
    }

    $scope.addPicture = function(){
        $rootScope.$broadcast("BeginStatus","posting");
        Report.addPicAlt($scope.newReport.id, $scope.newReport.b64pic).then(function(pictureUrl) {
            $scope.newReport.pictureUrl=pictureUrl;
            $scope.newReport.reportForm=true;
            $scope.newReport.pictureForm=true;
            $scope.newReport.endOfProcess=true;
            $rootScope.$broadcast("FlashStatus","Posted");
        }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error :"+reason);
        })
    }

    $scope.selectFile = function()
       {
        $timeout(function() {
            $("#cameraInput").click();
        }, 0);
       }
});