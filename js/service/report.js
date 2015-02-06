app.service('Report', function($http, $q, $timeout){

    this.reports=false;

    this.getReports = function(count,since_id) {
        var firstattr=true;
        var separation='';
        var deferred = $q.defer();
        var endpoint = './api/v1/reports.json';

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof since_id != "undefined") {
            endpoint=endpoint+separation+'since_id='+since_id;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof count != "undefined") {
            endpoint=endpoint+separation+'count='+count;
        }

        $http.get(endpoint)
            .success(function(data, status){
                this.reports=data.results;
                deferred.resolve(this.reports);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    };

    this.getReportsByGeoloc = function(count,longitude,latitude,radius,since_id) {
        var firstattr=true;
        var separation='';
        var deferred = $q.defer();
        var endpoint = './api/v1/reports.json';

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof since_id != "undefined") {
            endpoint=endpoint+separation+'since_id='+since_id;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof count != "undefined") {
            endpoint=endpoint+separation+'count='+count;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof count != "undefined") {
            endpoint=endpoint+separation+'longitude='+longitude;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof count != "undefined") {
            endpoint=endpoint+separation+'latitude='+latitude;
            firstattr=false;
        }

        if (firstattr) separation='?';
        else
            separation='&';
        if (typeof count != "undefined") {
            endpoint=endpoint+separation+'distance='+radius;
            firstattr=false;
        }

        $http.get(endpoint)
            .success(function(data, status){
                this.reports=data.results;
                deferred.resolve(this.reports);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    };

    this.getReport = function(id){
        var deferred = $q.defer();
        $http.get('./api/v1/reports/id/'+id+'.json')
            .success(function(data, status){
                this.reports=data;
                deferred.resolve(this.reports);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    }

    this.add = function(report){
        var deferred = $q.defer();
        $http.post('./api/v1/reports/',report)
            .success(function(data, status){
                $timeout(function(){
                    console.log(data.success);
                    deferred.resolve(data.success);
                }, 0)
            })
            .error(function(data, status){
                deferred.reject(data);
            })
        return deferred.promise;

    }

    this.vote = function(id){
        var deferred = $q.defer();
        $http.post('./api/v1/reports/'+id+'/vote.json')
            .success(function(data, status){
                $timeout(function(){
                    deferred.resolve(data.success);
                }, 0)
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    }

    this.addPic = function(report){
        var deferred = $q.defer();
        $http.post('./api/v1/pictures/upload.json',report)
            .success(function(data, status){
                console.log(data.success);
                deferred.resolve(data.success);                    
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;

    }
    this.addPicAlt = function(id, picture){
        var deferred = $q.defer();
        var postPic = {};
        postPic.picture=picture;
        postPic = JSON.stringify(postPic);
        $http.post('./api/v1/reports/'+id+'/pictures/upload.json',postPic)
            .success(function(data, status){
                console.log(data.success);
                deferred.resolve(data.success);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
    return deferred.promise;

    }

    this.getLocations = function() {
        var deferred = $q.defer();
        $http.get('./api/v1/locations.json')
            .success(function(data, status){
                this.locations=data.results;
                deferred.resolve(this.locations);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    };

    this.getSubLocations = function(id) {
        var deferred = $q.defer();
        $http.get('./api/v1/locations/'+id+'.json')
            .success(function(data, status){
                this.sublocations=data.results.sublocation;
                deferred.resolve(this.sublocations);
            })
            .error(function(data, status){
                deferred.reject(status);
            })
        return deferred.promise;
    };

})