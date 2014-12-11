app.controller('statusController', ['$scope', '$timeout',  
    function ($scope, $timeout) {
        $scope.qStatus = "";
        $scope.$on('BeginStatus', function (event, args) {
             $scope.qStatus = args;
        });

        $scope.$on("EndStatus", function (event) {
            $scope.qStatus = "";
        });

        $scope.$on('FlashStatus', function (event, args) {
			$scope.qStatus = args;
			$timeout(function(){
                    $scope.qStatus = "";
                }, 2000)
        });
    }
]);