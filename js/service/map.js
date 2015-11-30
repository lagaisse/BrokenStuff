app.service('MapService', function($http, $q, $timeout){
    var host = apiHost;
    this.geojson=false;

    this.getGeoJson = function(longitude,latitude,radius) {
        var firstattr=true;
        var separation='';
        var deferred = $q.defer();
        var endpoint = '/api/v1/map.json';


        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof longitude != "undefined") {
            endpoint=endpoint+separation+'longitude='+longitude;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof latitude != "undefined") {
            endpoint=endpoint+separation+'latitude='+latitude;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof distance != "undefined") {
            endpoint=endpoint+separation+'distance='+radius;
            firstattr=false;
        }

        endpoint=host+endpoint; // test
        $http.get(endpoint)
            .success(function(data, status){
                this.geojson = data;
                deferred.resolve(this.geojson);
            })
            .error(function(data, status){
                deferred.reject(status);
            });
        return deferred.promise;
    };

})