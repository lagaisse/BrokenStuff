app.controller('statusController', ['$scope', '$timeout',  
    function ($scope, $timeout) {
        $scope.qStatus = "";
        $scope.$on('BeginStatus', function (event, args) {
            $timeout(function(){
                    $scope.qStatus = args;
                }, 1000)
        });

        $scope.$on("EndStatus", function (event) {
            $scope.qStatus = "";
        });

        $scope.$on('FlashStatus', function (event, args) {
			$scope.qStatus = args;
			$timeout(function(){
                    $scope.qStatus = "";
                }, 4000)
        });
    }
]);