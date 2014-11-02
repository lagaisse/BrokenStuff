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
        $http.post('./api/v1/reports/',report)
            .success(function(data, status){
                console.log(data.success);
                deferred.resolve(data.success);
            })
            .error(function(data, status){
                deferred.reject('ca pue du cul');
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
                deferred.reject('ca pue du cul');
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
                deferred.reject('ca pue du cul');
            })
        return deferred.promise;

    }

    this.onFileSelect = function(files) {
        alert('pouet');
    return true;
    }
})