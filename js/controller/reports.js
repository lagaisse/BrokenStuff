// ------------ SEARCH CONTROLLER ------------ //
app.controller("SearchController", function($scope,$rootScope, Report, geolocation,localstorageservice, progress) {
    var count=30; // search report count 
    var radius=30; // search reports inside this radius area 
    var lsvotes; // actual votes in localstorage
    $scope.lastid=0;
    $scope.votes=[];
     $scope.go=false; 
    // $scope.nogo=false; // useless
    progress.start();
    $('.advice').hide(0).delay(3000).show(300);

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
            progress.stop();
            $scope.reports=reports;
            $scope.lastid=reports[reports.length-1].id;
            $scope.go=true;
            }, function(reason) {
                $rootScope.$broadcast("FlashStatus","error : "+reason);
        })
    } , function(reason,scope){
        progress.stop();
        $rootScope.$broadcast("ACKStatus",{status:reason , actionName:"OK" , action:"close();"});
    });

    $scope.moreReports = function(lastid){ // A tester lorsqu'on l'utilisera vraiment
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

// ----------- VOTE CONTROLLER ------------ //
app.controller("VoteController", function($scope, $document, localstorageservice, Report) {
    angular.element(document).ready(function () {
        if ($scope.votes.indexOf($scope.report.id)!=-1){ // mise à jour des états voted des reports affichés
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

// ------------- ADD CONTROLLER ------------ //
app.controller("AddController", function($scope,$rootScope, $timeout, $location, Report, geolocation, progress) {
    $('head').append('<script src="js/forms.js"></script>');
    $('head').append('<script src="dist/js/exif.js"></script>');
    $scope.newReport={};
    $scope.locations = [];
    $scope.sublocations = [];

    Report.getLocations().then(function(locations){
        $scope.locations=locations;
    }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error : "+reason);
    })

    $scope.addReport = function() {
        progress.start();
        $scope.newReport.geolocation=$scope.coords;
        $scope.newReport.datetime=Date.now();
        Report.add($scope.newReport).then(function(id) {
                if ($scope.newReport.b64pic){
// experimentation
        b64picimg = new Image();
        var canvas = document.createElement("canvas");      
        var scale = 1;
        canvas.width  = $scope.newReport.crop.width*scale;
        canvas.height = $scope.newReport.crop.height*scale;

        b64picimg.onload = function() {
            canvas.getContext("2d").scale(scale,scale);   
            canvas.getContext("2d").drawImage(b64picimg, $scope.newReport.crop.left, $scope.newReport.crop.top, $scope.newReport.crop.width, $scope.newReport.crop.height, 0, 0, $scope.newReport.crop.width, $scope.newReport.crop.height );
            var res=canvas.toDataURL('image/jpg', 90);
            $scope.newReport.b64pic=res;

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
        b64picimg.src=$scope.newReport.b64pic;
// fin de l'experimentation
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

// -------------- REPORT CONTROLLER ---------------- //
app.controller("ReportController", function($scope, $rootScope, Report, $routeParams) {
	$scope.report=Report.getReport($routeParams.id).then(function(report){
        $scope.report=report;
        console.log(report);
    }, function(reason) {
            $rootScope.$broadcast("FlashStatus","error : "+reason);
    })
});

// ---------------- PICTURE CONTROLLER -------------- //
app.controller("PictureController", function($scope, $rootScope, $document, $timeout, $location, Report) {
    $rootScope.onFileSelect = function($files) {
        //$files: an array of files selected, each file has name, size, and type.
        //here : there is only one file
        for (var i = 0; i < $files.length; i++) {
            var file = $files[i];
            console.log($files[i]);
            var reader = new FileReader();
            var image = new Image();
            image.onload = function(e) {
                // EXIF processing seems not work
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
                    image.src=$scope.newReport.b64pic;
                    console.log("b64:");
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