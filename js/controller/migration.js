app.controller("MigController", function($scope,$rootScope,Mig) {
var currentVersion;
var targetVersion;
var step=0;

Mig.start().then(function(infos){
			$scope.mig=infos;
			console.log(infos);
			currentVersion=infos.currentversion;
			targetVersion=infos.targetversion;

			if (currentVersion==targetVersion) {
				$scope.migok=true;
				$rootScope.$broadcast("ACKStatus",{status:'Migration terminée' , actionName:"OK" , action:"close();"});
			}

            }, function(reason) {
                $rootScope.$broadcast("FlashStatus","error : "+reason);
        })

    $scope.next = function()
       {
		$scope.migok=true;
		Mig.next().then(function(data){
			$scope.mig=data;
			currentVersion=data.currentversion;
			console.log(data);
			if (currentVersion<targetVersion) {
				$scope.next();
			}
			else
				$rootScope.$broadcast("ACKStatus",{status:'Migration terminée' , actionName:"OK" , action:"close();"});
		}, function(reason) {
			$rootScope.$broadcast("FlashStatus","error : "+reason);	
		})
       }

});