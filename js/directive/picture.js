app.directive('ngPicture',function(){

	return {
		transclude: true,
		restrict: 'EA',
		scope: {},
		controller: ['$scope', function ($scope) {
		    $scope.addPicture = function() {
		        alert($scope.newReport);
		    }

		}],
		replace: true,
		template:'<div class="photo-form">'+
				'	<div class="drop-zone">'+
				'		<form ng-submit="addPicture()" enctype="multipart/form-data" role="form">'+
				'		<input type="hidden" ng-model="newPicture.idReport"/>'+
//				'		<input class="form-control btn btl-lg btn-default whitebox" type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraInput" ng-model="newPicture.picture">'+
				'		<div class="file_upload">'+
				'		<input type="file" id="cameraInput" name="cameraInput" accept="image/*" ng-model="newPicture.picture">'+
				'		</div>'+
				'		<div class="desc-photo">'+
				'		<i class="fa fa-camera fa-5x"></i>'+
				'		</div>'+

				'	</div>'+
				'		<input class="btn btn-success btn-lg btn-block" type="submit" value="Terminer"/>'+
				'		</form>'+
				'</div>'
	}
})
