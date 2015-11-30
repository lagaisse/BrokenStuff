app.controller("MapController", [ "$scope","$rootScope", "$log", "leafletData", "MapService", "$location", "progress", function($scope, $rootScope , $log, leafletData, MapService, $location, progress) {
 var host = apiHost;
 var geoloc=false;

    $scope.refreshGeoJson = function(event) {
            leafletData.getMap().then(function(map) {
            bounds=map.getBounds();
            distance=Math.ceil(bounds.getNorthEast().distanceTo(bounds.getSouthWest())/2000)

            MapService.getGeoJson(bounds.getCenter().lng, bounds.getCenter().lat, distance).then(function() {
                    $("#content").addClass("something"); // ajout de la classz 'something' lorsqu'il y a un resultat
                    angular.extend($scope, {
                    geojson: {
                        data: this.geojson
                    }
                });
            progress.stop();
            }, function(reason) {                
                $rootScope.$broadcast("FlashStatus","error : "+reason);
            });

        });
    };

    angular.extend($scope, {
        osloCenter: {
            lat: 49.04,
            lng: 2.00,
            zoom: 11
        },
        center:{
            lat: 49.04,
            lng: 2.00,
            zoom: 11,
            autoDiscover: true
        },
        defaults: {
            scrollWheelZoom: true
        },
        events: {
            map: {
                enable: ['zoomstart','zoomend', 'dragend', 'click', 'mousemove','locationfound', 'locationerror','load'],
                logic: 'emit'
            }
        }
    });
    $scope.markers = {};
    $scope.paths = {};

    progress.start();
    $scope.eventDetected = "No events yet...";

    $scope.$on('leafletDirectiveMap.zoomstart', function(event){
    });

    $scope.$on('leafletDirectiveMap.zoomend',  $scope.refreshGeoJson);
    $scope.$on('leafletDirectiveMap.dragend', $scope.refreshGeoJson);

    $scope.$on('leafletDirectiveMap.click', function(event, args){

    });

    $scope.$on('leafletDirectiveMap.mousemove', function(event, args){
        $scope.eventDetected = "MouseMove";
    });

    $scope.$on('leafletDirectiveMap.locationfound', function(event,args){
        var leafEvent = args.leafletEvent;

        $scope.eventDetected = "location found";
        //console.log(args);
        var radius =  leafEvent.accuracy / 2;
        $scope.markers["robert"] = {lat: leafEvent.latlng.lat,
                                    lng:  leafEvent.latlng.lng,
                                    message: "my position in radius " + radius,
                                    icon: {icon:"extraMarkerIcon", markerColor: "red", shape: "star" },
                                    draggable: true};
        $scope.paths["robert"] = {type: "circle",
                                  radius: radius,
                                  latlngs: leafEvent.latlng,
                                  weight: 2,
                                  clickable: false       };
        
        leafletData.getMap().then(function(map) {

        $scope.$on('$locationChangeStart', function(event, next, current) {
            map.stopLocate();
           });

            if (!geoloc) {
               map.locate({watch:true, setView:false});
                geoloc=true;
            }
        });

    }); 
    $scope.$on('leafletDirectiveMap.locationerror', function(event, args){
        $scope.eventDetected = "location error";
        $rootScope.$broadcast("FlashStatus","error : "+ "Erreur de géolocalisation.");
    });    

    $scope.$on('leafletDirectiveMap.load', function(event, args) {
        $scope.eventDetected = "chargement";
    });

} ]);