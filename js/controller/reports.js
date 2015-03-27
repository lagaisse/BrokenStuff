app.controller("SearchController", function($scope,$rootScope, Report, geolocation,localstorageservice) {
    var count=30; // search reeport count 
    var radius=30; // search reports inside this radius area 
    var lsvotes;
    $scope.lastid=0;
    $scope.go=false;
    $scope.nogo=false;
    $scope.votes=[];

    lsvotes=localstorageservice.getFromLocalStorage("votes");
    if (lsvotes !== null){
        for(var i= 0; i < lsvotes.length; i++)
        {
            $scope.votes.push(lsvotes[i].id);
        }
    }

    geolocation.getLocation().then(function(data,scope){
        $scope.coords= {longitude:data.coords.longitude, latitude:data.coords.latitude};
        $scope.reports=Report.getReportsByGeoloc(count,$scope.coords.longitude,$scope.coords.latitude,radius).then(function(reports){
            $scope.reports=reports;
            $scope.lastid=reports[reports.length-1].id;
            $scope.go=true;
            }, function(reason) {
                $scope.go=false;
                $rootScope.$broadcast("FlashStatus","error : "+reason);
        })
    } , function(reason,scope){
        $rootScope.$broadcast("ACKStatus",{status:reason , actionName:"OK" , action:"close();"});
        
    });

    $scope.moreReports = function(lastid){
        $rootScope.$broadcast("BeginStatus","Recherche");
        Report.getReports(count,lastid).then(function(reports){
            $scope.lastid=reports[reports.length-1].id;
            $scope.reports = $scope.reports.concat(reports);
            $rootScope.$broadcast("EndStatus");
        }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error : "+reason);
    })
    }
});

app.controller("VoteController", function($scope, $document, localstorageservice, Report) {

    angular.element(document).ready(function () {
        if ($scope.votes.indexOf($scope.report.id)!=-1){
            console.log("prout");
            $("#action_"+$scope.report.id).addClass("disabled");
        }
        });

    $scope.vote = function(report_id) {
        Report.vote(report_id).then(function(data){
            localstorageservice.add("votes",report_id);
            $scope.$parent.report.nb_vote++;
            $("#action_"+report_id).addClass("disabled");
        }, function(reason) {
            console.log("bug");
        })
       }

    });

app.controller("AddController", function($scope,$rootScope, $timeout, $location, Report, geolocation, progress) {
    $('head').append('<script src="js/forms.js"></script>');
    $scope.newReport={};

/*    geolocation.getLocation().then(function(data){
      $scope.coords= {longitude:data.coords.longitude, latitude:data.coords.latitude};
    });
*/
    $scope.locations = [];
    $scope.sublocations = [];
    Report.getLocations().then(function(locations){
        $scope.locations=locations;
    })

    $scope.addReport = function() {
        //$rootScope.$broadcast("BeginStatus","Chargement");
        progress.start();
        $scope.newReport.geolocation=$scope.coords;
        $scope.newReport.datetime=Date.now();
        Report.add($scope.newReport).then(function(id) {
                if ($scope.newReport.b64pic){
                    $scope.newReport.id=id;
                    //$rootScope.$broadcast("BeginStatus","posting");
                    Report.addPicAlt($scope.newReport.id, $scope.newReport).then(function(pictureUrl) { 
                        $scope.newReport.pictureUrl=pictureUrl;
                        $scope.newReport.endOfProcess=true;
                        //$rootScope.$broadcast("EndStatus");
                        progress.stop().then(function() {
                            $location.path("/search");
                            })
                    }, function(reason) {
                        $rootScope.$broadcast("FlashStatus","error : "+reason);
                    })
                }
                else
                {
                    $scope.newReport.endOfProcess=true;
                    //$rootScope.$broadcast("EndStatus");
                    progress.stop().then(function() {
                        $location.path("/search");
                        })
                }

        	}, function(reason) {
                progress.stop().then(function() {
                    error="";
                    for (var i in reason)
                        for (var j in reason[i])
                            error=error+reason[i][j]+" ";
                    console.log(error);
                    $rootScope.$broadcast("FlashStatus","erreur : "+error  );
                })
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
	$scope.report=Report.getReport($routeParams.id).then(function(report){
        $scope.report=report;
        console.log(report);
    }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error : "+reason);
    })
});

app.controller("PictureController", function($scope, $rootScope, $timeout, $location, Report) {
    $rootScope.onFileSelect = function($files) {
        //$files: an array of files selected, each file has name, size, and type.
        for (var i = 0; i < $files.length; i++) {
            var file = $files[i];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                $timeout(function() {
                    $scope.newReport.b64pic = reader.result;
                    console.log($scope.newReport);
                }, 0);
            }
        }
    }

    $scope.selectFile = function()
       {
        $timeout(function() {
            $("#cameraInput").click();
        }, 0);
       }
});