app.controller('statusController', ['$scope', '$timeout',  
    function ($scope, $timeout) {
        $scope.qStatus = "";
        $scope.$on('BeginStatus', function (event, args) {
            $scope.qStatus = args;
            $("#view").addClass("waiting");
            $("#snack").addClass("snackbar-opened");

        });

        $scope.$on("EndStatus", function (event) {
            $timeout(function(){
                $("#snack").removeClass("snackbar-opened");
                $("#view").removeClass("waiting");
                $scope.qStatus = "";
                }, 3000)
        });

        $scope.$on('FlashStatus', function (event, args) {
			$scope.qStatus = args;
            $("#snack").addClass("snackbar-opened");
			$timeout(function(){
                    $("#snack").removeClass("snackbar-opened");
                    $("#view").removeClass("waiting");
                    $scope.qStatus = "";
                }, 3000)
        });
    }
]);