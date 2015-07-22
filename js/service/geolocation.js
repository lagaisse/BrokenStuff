'use strict';

angular.module('geolocation',[]).constant('geolocation_msgs', {
        'errors.location.unsupportedBrowser':'Geolocalisation impossible depuis ce navigateur',
        'errors.location.permissionDenied':'Accés à la géolocalisation refusé',
        'errors.location.positionUnavailable':'Impossible de vous géolocaliser',
        'errors.location.timeout':'Temps de recherche dépassé'
});

angular.module('geolocation')
  .factory('geolocation', ['$q','$rootScope','$window','geolocation_msgs',function ($q,$rootScope,$window,geolocation_msgs) {
    return {
      getLocation: function (opts) {
        var deferred = $q.defer();
        if ($window.navigator && $window.navigator.geolocation) {
          $window.navigator.geolocation.getCurrentPosition(function(position){
            $rootScope.$apply(function(){deferred.resolve(position);});
          }, function(error) {
            switch (error.code) {
              case 1:
                $rootScope.$broadcast('error',geolocation_msgs['errors.location.permissionDenied']);
                $rootScope.$apply(function() {
                  deferred.reject(geolocation_msgs['errors.location.permissionDenied']);
                });
                break;
              case 2:
                $rootScope.$broadcast('error',geolocation_msgs['errors.location.positionUnavailable']);
                $rootScope.$apply(function() {
                  deferred.reject(geolocation_msgs['errors.location.positionUnavailable']);
                });
                break;
              case 3:
                $rootScope.$broadcast('error',geolocation_msgs['errors.location.timeout']);
                $rootScope.$apply(function() {
                  deferred.reject(geolocation_msgs['errors.location.timeout']);
                });
                break;
            }
          }, {timeout:10000});
        }
        else
        {
          $rootScope.$broadcast('error',geolocation_msgs['errors.location.unsupportedBrowser']);
          $rootScope.$apply(function(){deferred.reject(geolocation_msgs['errors.location.unsupportedBrowser']);});
        }
        return deferred.promise;
      }
    };
}]);