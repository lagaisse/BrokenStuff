app.directive('ngPicture', ['Report' , function(Report){
	return {
		transclude: true,
		restrict: 'EA',
		link: function ($scope, Element, attrs) {
			$scope.addPicture = function() {
				Report.addPic($scope.newPicture).then(function() {
	        		$scope.loading=false;
	                //$scope.newReport={};
	        	}, function(msg) {
	        		alert(msg);
	        	})
			}
		},
		replace: true,
		template:'<div class="photo-form">'+
				'		<form ng-submit="addPicture()" enctype="multipart/form-data" role="form2">'+
					'	<div class="drop-zone">'+
				'		<input type="hidden" ng-model="newPicture.idReport"/>'+
//				'		<input class="form-control btn btl-lg btn-default whitebox" type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraInput" ng-model="newPicture.picture">'+
				'			<div class="file_upload">'+
				'				<input type="file" id="cameraInput" name="cameraInput" accept="image/*" ng-model="newPicture.picture">'+
				'			</div>'+
				'			<div class="desc-photo">'+
				'				<i class="fa fa-camera fa-5x"></i>'+
				'			</div>'+
				'	</div>'+
				'		<input class="btn btn-success btn-lg btn-block" type="submit" value="Terminer"/>'+
				'		</form>'+

				'</div>'
	}
}]);
