app.controller("MapController", [ "$scope", "$log", "leafletData", "MapService", function($scope, $log, leafletData, MapService) {
 var host = apiHost;

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
        defaults: {
            scrollWheelZoom: true
        },
        events: {
            map: {
                enable: ['zoomstart','zoomend', 'dragend', 'click', 'mousemove'],
                logic: 'emit'
            }
        }
    });



    $scope.eventDetected = "No events yet...";

    $scope.$on('leafletDirectiveMap.zoomstart', function(event){
        //$scope.eventDetected = "ZoomStart";
    });

    $scope.$on('leafletDirectiveMap.zoomend',  this.refreshGeoJson);
    $scope.$on('leafletDirectiveMap.dragend', this.refreshGeoJson);

    $scope.$on('leafletDirectiveMap.click', function(event){
      //  $scope.eventDetected = "Click";
    });

    $scope.$on('leafletDirectiveMap.mousemove', function(event){
        //$scope.eventDetected = "MouseMove";
    });


} ]);