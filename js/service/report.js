app.service('Report', function($http, $q){

    this.reports=false;

    this.getReports = function() {
        var deferred = $q.defer();
        $http.get('./api/v1/reports.json')
            .success(function(data, status){
                this.reports=data.results;
                deferred.resolve(this.reports);
            })
            .error(function(data, status){
                deferred.reject('ca pue du cul');
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
                deferred.reject('ca pue du cul');
            })
        return deferred.promise;
    }

    this.add = function(report){
        var deferred = $q.defer();
        var reportData={'need data':101,'other data':200}; //TODO
        $http.post('./api/v1/reports/',reportData)
            .success(function(data, status){
                deferred.resolve();
            })
            .error(function(data, status){
                deferred.reject('ca pue du cul');
            })
        return deferred.promise;

    }

})