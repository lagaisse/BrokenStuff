app.directive('ngPicture', ['Report' , function(Report){
	return {
		transclude: true,
		restrict: 'EA',
		link: function ($scope, Element, attrs) {
			$scope.addPicture = function() {
//TODO : ajouter le broadcast pour le chargement
//				$rootScope.$broadcast("BeginStatus","posting");
				Report.addPicAlt($scope.newReport.id, $scope.newReport.b64pic).then(function() {
//					$rootScope.$broadcast("EndStatus");
	                $scope.newReport.reportForm=true;
	                $scope.newReport.pictureForm=true;
	                $scope.newReport.endOfProcess=true;
	        	}, function(msg) {
	        		alert(msg);
	        	})
			}
		},
		replace: true,
		template:'<div class="photo-form" ng-controller="PictureController">'+
				'		<form ng-submit="addPicture()" role="form2">'+
				'		<div class="drop-zone">'+
				'		<img class="drop-img" ng-if="newReport.b64pic" ng-src="{{newReport.b64pic}}"/>'+
				'		<input type="hidden" ng-model="newPicture.idReport"/>'+
				'			<div ng-hide="newReport.b64pic" class="file_upload">'+
				'				<input type="file" ng-file-select="onFileSelect($files)" id="cameraInput" name="cameraInput" accept="image/*" ng-model="newPicture.picture">'+
				'			</div>'+
				'			<div ng-hide="newReport.b64pic" class="desc-photo">'+
				'				<i class="fa fa-camera fa-5x"></i>'+
				'			</div>'+
				'	</div>'+
				'		<input ng-hide="newReport.endOfProcess" ng-disabled="!newReport.b64pic" class="btn btn-success btn-lg btn-block" type="submit" value="Terminer"/>'+
				'		</form>'+

				'</div>'
	}
}]);

app.directive('ngFileSelect',['$parse','$timeout',function($parse,$timeout){
	return function(scope, elem, attr){
		var fn = $parse(attr['ngFileSelect']);
		elem.bind('change', function(evt) {
		var files = [], fileList, i;
		fileList = evt.__files_ || evt.target.files;
		if (fileList != null) {
			for (i = 0; i < fileList.length; i++) {
				files.push(fileList.item(i));
			}
		}
		$timeout(function() {
			fn(scope, {
				$files : files,
				$event : evt
				});
			});
		});
	}
}]);