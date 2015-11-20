app.controller("MapController", [ "$scope", "$log", "leafletData", "MapService", "$location", function($scope, $log, leafletData, MapService, $location) {
 var host = apiHost;
 var geoloc=false;

    this.refreshGeoJson = function(event) {
            leafletData.getMap().then(function(map) {
            bounds=map.getBounds();
            distance=Math.ceil(bounds.getNorthEast().distanceTo(bounds.getSouthWest())/2000)

            MapService.getGeoJson(bounds.getCenter().lng, bounds.getCenter().lat, distance).then(function() {

                 //$scope.geojson={};
                angular.extend($scope, {
                    geojson: {
                        data: this.geojson
                    }
                });
            console.log($scope.geojson.data.features[0].properties);
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


    $scope.eventDetected = "No events yet...";

    $scope.$on('leafletDirectiveMap.zoomstart', function(event){
        //$scope.eventDetected = "ZoomStart";
    });

    $scope.$on('leafletDirectiveMap.zoomend',  this.refreshGeoJson);
    $scope.$on('leafletDirectiveMap.dragend', this.refreshGeoJson);

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
    });    

    $scope.$on('leafletDirectiveMap.load', function(event, args) {
        $scope.eventDetected = "chargement";
    });

} ]);