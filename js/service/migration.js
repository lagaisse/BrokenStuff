app.service('Mig', function($http, $q, $timeout){
var host = apiHost;

this.start = function() {
        var deferred = $q.defer();
        var endpoint = '/migrate';

        endpoint=host+endpoint;
        $http.get(endpoint)
            .success(function(data, status){
                deferred.resolve(data);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    };

this.next = function() {
        var deferred = $q.defer();
        var endpoint = '/migrate/next';

        endpoint=host+endpoint;
        $http.get(endpoint)
            .success(function(data, status){
                deferred.resolve(data);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    };


});