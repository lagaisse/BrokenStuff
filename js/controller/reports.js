app.controller("SearchController", function($scope,$rootScope, Report, geolocation,localstorageservice, progress) {
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

    $('.advice').hide(0).delay(3000).show(300);

    progress.start();
    geolocation.getLocation().then(function(data,scope){
        progress.stop();
        $scope.coords= {longitude:data.coords.longitude, latitude:data.coords.latitude};
        $scope.reports=Report.getReportsByGeoloc(count,$scope.coords.longitude,$scope.coords.latitude,radius).then(function(reports){
            $scope.reports=reports;
            $scope.lastid=reports[reports.length-1].id;
            $scope.go=true;
            }, function(reason) {
                progress.stop();
                $scope.go=false;
                $rootScope.$broadcast("FlashStatus","error : "+reason);
        })
    } , function(reason,scope){
        progress.stop();
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
            $("#action_"+$scope.report.id).addClass("disabled voted");
        }
        });

    $scope.vote = function(report_id) {
        if ($scope.votes.indexOf($scope.report.id)==-1){
            Report.vote(report_id).then(function(data){
            localstorageservice.add("votes",report_id);
            $scope.$parent.report.nb_vote++;
            $("#action_"+report_id).addClass("disabled voted");
            $("#action_"+report_id+" > span:first-child").addClass("instant-vote");
             }, function(reason) {
                console.log("bug");
            })
        }
       }

    });

app.controller("AddController", function($scope,$rootScope, $timeout, $location, Report, geolocation, progress) {
    $('head').append('<script src="js/forms.js"></script>');
    $('head').append('<script src="dist/js/exif.js"></script>');
    $scope.newReport={};
    
    $scope.locations = [];
    $scope.sublocations = [];
    Report.getLocations().then(function(locations){
        $scope.locations=locations;
    })

    $scope.addReport = function() {
        progress.start();
        $scope.newReport.geolocation=$scope.coords;
        $scope.newReport.datetime=Date.now();
        Report.add($scope.newReport).then(function(id) {
                if ($scope.newReport.b64pic){
                    $scope.newReport.id=id;
                    Report.addPicAlt($scope.newReport.id, $scope.newReport).then(function(pictureUrl) { 
                        $scope.newReport.pictureUrl=pictureUrl;
                        $scope.newReport.endOfProcess=true;
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

app.controller("PictureController", function($scope, $rootScope, $document, $timeout, $location, Report) {
    $rootScope.onFileSelect = function($files) {
        //$files: an array of files selected, each file has name, size, and type.
        for (var i = 0; i < $files.length; i++) {
            var file = $files[i];
            var reader = new FileReader();
            var image = new Image();
            image.onload = function() {
                EXIF.getData(image, function() {
                    var Orientation = EXIF.getTag(this, "Orientation");
                    switch (Orientation) {
                        case 8:
                            console.log(Orientation);
                            var transform="rotate(90 deg)";
                            var picture= document.getElementById('pic');
                          picture.style.transform = transform;
                          picture.style.oTransform = transform;
                          picture.style.msTransform = transform;
                          picture.style.mozTransform = transform;
                          picture.style.webkitTransform = transform;
                        break;
                    }
                });

                element=document.getElementById("pic");
                ratio=element.width/element.naturalWidth;
                $scope.newReport.crop={};
                $scope.newReport.crop.height=Math.round(element.parentElement.clientHeight/ratio);
                $scope.newReport.crop.width=Math.round(element.width/ratio);
                $scope.newReport.crop.top=0;
                $scope.newReport.crop.left=0;
                console.log("crop:{ top:("+$scope.newReport.crop.top+"), left:("+$scope.newReport.crop.left+"), height:("+$scope.newReport.crop.height+"), width:("+$scope.newReport.crop.width+") }");
            };
            reader.readAsDataURL(file);
            reader.onload = function() {
                $timeout(function() {
                    $scope.newReport.b64pic = reader.result;
                    image.src =$scope.newReport.b64pic;
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