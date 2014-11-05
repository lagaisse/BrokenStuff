app.controller('statusController', ['$scope',  
    function ($scope) {
        $scope.qStatus = "";
        $scope.$on('BeginStatus', function (event, args) {
            $scope.qStatus = args;
        });

        $scope.$on("EndStatus", function (event) {
            $scope.qStatus = "";
        });
    }
]);